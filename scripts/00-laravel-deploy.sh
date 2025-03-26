#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

# echo "generating application key..."
# php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migration reset"
php artisan migrate:reset

echo "Running migrations..."
php artisan migrate --force

echo "Running seeders..."
php artisan db:seed

# Check if the seed command was successful
if [ $? -eq 0 ]; then
    echo "Seeders ran successfully."
else
    echo "There was an error running the seeders."
fi