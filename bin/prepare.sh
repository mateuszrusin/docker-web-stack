#!/usr/bin/env bash


docker-compose run composer composer install
docker-compose exec -T php-fpm php bin/console doctrine:schema:update --force
docker-compose exec -T php-fpm php bin/console doctrine:database:import config/data.sql