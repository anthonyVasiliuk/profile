# Используем официальный образ PHP + Apache
FROM php:8.2-apache

# Устанавливаем зависимости (PHP и Node.js)
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    cron \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем Node.js и npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Устанавливаем зависимости Laravel
WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Настраиваем права доступа
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Устанавливаем переменные окружения
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV ASSET_URL=https://profile-jhmf.onrender.com
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf

# Создаём cron-задание
RUN echo "*/10 * * * * curl -s https://profile-jhmf.onrender.com > /dev/null 2>&1" > /etc/cron.d/keep-alive

# Даём нужные права и включаем cron
RUN chmod 0644 /etc/cron.d/keep-alive && crontab /etc/cron.d/keep-alive

# Открываем порт 8000
EXPOSE 8000

# Запускаем сервер
CMD bash -c "service cron start && apache2-foreground"
