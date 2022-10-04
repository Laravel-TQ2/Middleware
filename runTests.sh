#!/bin/bash

docker run -d --name mysqlTests -p 3306:3306 -e MYSQL_ROOT_PASSWORD=1234 -e MYSQL_DATABASE=laravel mysql:5.7

sleep 15

php artisan migrate
php artisan db:seed --class=UsuariosSeeder

php artisan test

docker rm -f mysqlTests

