# Pathfinder

Built using Laravel 5 and Swagger

Install: composer install

Sample Database is included in database/github.sql 
or if you want a fresh db create a "github" database and run
php artisan migrate
php artisan db:seed

UI and documentation of the api: /api/documentation

Endpoint to find path: /api/shortest-path/14/4 (example url based on current db data)

For unit tests run phpunit

For acceptance tests run behat (required database: github_testing)

