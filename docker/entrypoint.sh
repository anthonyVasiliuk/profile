#!/usr/bin/env sh
set -eu

APP_DIR="/var/www/html"
STORAGE_DIR="$APP_DIR/storage"
APP_KEY_FILE="$STORAGE_DIR/app/app.key"

mkdir -p \
    "$STORAGE_DIR/app" \
    "$STORAGE_DIR/app/database" \
    "$STORAGE_DIR/framework/cache/data" \
    "$STORAGE_DIR/framework/sessions" \
    "$STORAGE_DIR/framework/views" \
    "$STORAGE_DIR/logs" \
    "$APP_DIR/bootstrap/cache" \
    /run/nginx

if [ -z "${APP_KEY:-}" ] && [ -f "$APP_KEY_FILE" ]; then
    export APP_KEY="$(cat "$APP_KEY_FILE")"
fi

if [ -z "${APP_KEY:-}" ] && [ "${AUTO_GENERATE_APP_KEY:-false}" = "true" ]; then
    export APP_KEY="$(php artisan key:generate --show --no-interaction)"
    printf '%s' "$APP_KEY" > "$APP_KEY_FILE"
fi

if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    SQLITE_DB="${DB_DATABASE:-$APP_DIR/storage/app/database/database.sqlite}"
    mkdir -p "$(dirname "$SQLITE_DB")"
    touch "$SQLITE_DB"
fi

if [ ! -L "$APP_DIR/public/storage" ]; then
    php artisan storage:link --no-interaction || true
fi

if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then
    php artisan migrate --force --no-interaction
fi

envsubst '${PORT}' < /etc/nginx/templates/default.conf.template > /etc/nginx/http.d/default.conf

chown -R www-data:www-data "$STORAGE_DIR" "$APP_DIR/bootstrap/cache"

exec "$@"
