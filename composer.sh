#!/usr/bin/env bash

if [ -z "$1" ]
then
    CMD="bash"
else
    CMD="composer "$1
fi

docker-compose run composer ${CMD}
