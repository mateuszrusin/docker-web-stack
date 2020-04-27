#!/usr/bin/env bash

docker-compose down

if [ "$1" == "--force" ]
then
    docker-compose build --force
fi

docker-compose up -d --remove-orphans
