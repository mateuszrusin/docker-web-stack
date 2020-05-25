#!/usr/bin/env bash

cp -n .env.dist .env
cp -n backend/.env.dist backend/.env


. "${PWD}/bin/build.sh"
. "${PWD}/bin/start.sh"
. "${PWD}/bin/prepare.sh"