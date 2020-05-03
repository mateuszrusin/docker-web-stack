#!/usr/bin/env bash

if [ -z "$1" ]
then
    CMD="bash"
else
    CMD="composer "$@
fi

docker-compose run composer ${CMD}
