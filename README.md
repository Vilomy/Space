composer install
cp .env.example .env
php artisan key:generate
в проекте использовалась база postgresql

в проекте реализована фабрика 
php artisan migrate --seed

проект 
основан на laravel 10
composer create-project --prefer-dist laravel/laravel project-name "10.*.*"
