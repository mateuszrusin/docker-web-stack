#!/usr/bin/env bash

cp -n .env.dist .env
cp -n backend/.env.dist backend/.env

docker-compose down
docker-compose build --force --no-cache --parallel
docker-compose up -d --remove-orphans

docker-compose run composer composer install
docker-compose exec -T php-fpm php bin/console doctrine:database:import config/dump.sql