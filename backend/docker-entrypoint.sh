#!/bin/sh
set -e

cd /var/www/html

echo "Ensuring SQLite database file exists..."
mkdir -p database
[ -f database/database.sqlite ] || touch database/database.sqlite

if [ ! -d vendor ]; then
    echo "Vendor directory missing, running composer install..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

echo "Clearing Laravel caches..."
php artisan config:clear
php artisan route:clear
php artisan cache:clear

echo "Starting Laravel development server..."
exec php artisan serve --host=0.0.0.0 --port=8000