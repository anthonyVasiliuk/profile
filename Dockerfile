FROM php:8.4-cli-alpine AS composer_deps

WORKDIR /app

RUN apk add --no-cache \
    icu-dev \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    sqlite-dev \
    libxml2-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install \
        bcmath \
        gd \
        intl \
        mbstring \
        pdo_mysql \
        pdo_sqlite \
        xml \
        zip

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts


FROM node:22-alpine AS frontend_build

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY resources ./resources
COPY public ./public
COPY vite.config.js ./

RUN npm run build


FROM php:8.4-fpm-alpine AS app

WORKDIR /var/www/html

RUN apk add --no-cache \
    nginx \
    supervisor \
    bash \
    curl \
    gettext \
    icu-dev \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    sqlite-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install \
        bcmath \
        exif \
        gd \
        intl \
        opcache \
        pcntl \
        pdo_mysql \
        pdo_sqlite \
        zip

COPY . .
COPY --from=composer_deps /app/vendor ./vendor
COPY --from=frontend_build /app/public/build ./public/build

RUN rm -f bootstrap/cache/*.php \
    && php artisan package:discover --ansi \
    && php artisan vendor:publish --force --tag=livewire:assets --ansi \
    && mkdir -p \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        storage/app/database \
        bootstrap/cache \
        /run/nginx \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

COPY docker/nginx/default.conf.template /etc/nginx/templates/default.conf.template
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/php/php.ini /usr/local/etc/php/conf.d/zz-app.ini
COPY docker/entrypoint.sh /usr/local/bin/app-entrypoint

RUN chmod +x /usr/local/bin/app-entrypoint

ENV PORT=8080

EXPOSE 8080

ENTRYPOINT ["app-entrypoint"]
CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
