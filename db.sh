#!/usr/bin/env bash

if [ "$1" == "reload" ]
then
    docker-compose exec -T mariadb mysql -v -uapp -psecret app < backend/config/dump.sql
else
    docker-compose exec mariadb mysql -uapp -psecret app
fi




