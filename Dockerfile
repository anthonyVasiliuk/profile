FROM php:8.4-fpm-alpine AS php_base

RUN apk add --no-cache \
    icu-libs \
    libpng \
    libzip \
    libxml2 \
    oniguruma \
    sqlite-libs \
    && apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    icu-dev \
    libpng-dev \
    libzip-dev \
    libxml2-dev \
    oniguruma-dev \
    sqlite-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install \
        bcmath \
        exif \
        gd \
        intl \
        mbstring \
        opcache \
        pcntl \
        pdo_mysql \
        pdo_sqlite \
        xml \
        zip \
    && apk del .build-deps


FROM php_base AS composer_deps

WORKDIR /app

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


FROM php_base AS app

WORKDIR /var/www/html

RUN apk add --no-cache \
    nginx \
    curl \
    gettext

COPY app ./app
COPY bootstrap ./bootstrap
COPY config ./config
COPY database ./database
COPY lang ./lang
COPY public ./public
COPY resources/views ./resources/views
COPY routes ./routes
COPY artisan composer.json composer.lock ./
COPY --from=composer_deps /app/vendor ./vendor
COPY --from=frontend_build /app/public/build ./public/build

RUN rm -f bootstrap/cache/*.php \
    && mkdir -p \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        storage/app/database \
        bootstrap/cache \
        /run/nginx \
    && php artisan package:discover --ansi \
    && php artisan vendor:publish --force --tag=livewire:assets --ansi \
    && find vendor public/vendor -name '*.map' -type f -delete \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker/nginx/default.conf.template /etc/nginx/templates/default.conf.template
COPY docker/php/php.ini /usr/local/etc/php/conf.d/zz-app.ini
COPY docker/entrypoint.sh /usr/local/bin/app-entrypoint

RUN chmod +x /usr/local/bin/app-entrypoint

ENV PORT=8080

EXPOSE 8080

ENTRYPOINT ["app-entrypoint"]
CMD ["app-server"]
