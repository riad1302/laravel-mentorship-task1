# laravel-mentorship-task1
git clone https://github.com/riad1302/laravel-mentorship-task1.git

composer install

copy .env.example to .env

php artisan key:generate

php artisan migrate

php artisan db:seed

# Run Project Docker 
docker-compose build

docker network create laravel-mentorship-network

docker-compose up

docker exec -it laravel-mentorship-backend bash

copy .env.example to .env

composer install

php artisan key:generate

php artisan migrate

php artisan db:seed 



