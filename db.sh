#!/usr/bin/env bash

if [ "$1" == "reload" ]
then
    docker-compose exec -T php-fpm php bin/console doctrine:database:import config/dump.sql
else
    docker-compose exec mariadb mysql -uapp -psecret app
fi




