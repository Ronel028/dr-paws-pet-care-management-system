#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

# echo "Installing Node.js dependencies"
# npm install --no-dev --working-dir=/var/www/html

echo "Building assets"
npm run build --include=dev --working-dir=/var/www/html

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Seeding database..."
php artisan db:seed --force

echo "link pubic storage"
php artisan storage:link
