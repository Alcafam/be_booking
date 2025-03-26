#!/usr/bin/env bash
# echo "Running composer"
# composer global require hirak/prestissimo
# composer install --no-dev --working-dir=/var/www/html

# echo "generating application key..."
# php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

# echo "Running migration reset"
# php artisan migrate:reset

# echo "Running migrations..."
# php artisan migrate --path=/database/migrations/2014_10_12_000000_create_users_table.php --force
# php artisan migrate --path=/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php --force
# php artisan migrate --path=/database/migrations/2019_08_19_000000_create_failed_jobs_table.php --force
# php artisan migrate --path=/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php --force
# php artisan migrate --path=/database/migrations/2025_03_21_195706_create_events_table.php --force
# php artisan migrate --path=/database/migrations/2025_03_21_195726_create_bookings_table.php --force

# echo "Running seeders..."
# php artisan db:seed --force

# Check if the seed command was successful
# if [ $? -eq 0 ]; then
#     echo "Seeders ran successfully."
# else
#     echo "There was an error running the seeders."
# fi