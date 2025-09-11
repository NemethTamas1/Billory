#!/bin/sh
set -e

# SQLite fájl létrehozása, ha még nincs
mkdir -p database
[ -f database/database.sqlite ] || touch database/database.sqlite

# Ha nincs vendor, telepítse
if [ ! -d vendor ]; then
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

# Laravel cache törlése
php artisan config:clear
php artisan route:clear
php artisan cache:clear

# Laravel szerver indítása
php artisan serve --host=0.0.0.0 --port=8000
