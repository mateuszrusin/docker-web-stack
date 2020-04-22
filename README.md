# Docker web stack

Based on github.com/jpcaparas/docker-web-stack.git

## Run

> mv .env.example .env

> docker compose build

> docker compose up

## Usage

**./node.sh** to enter interactive mode in node container (with yarn, /frontend dir)

**./php.sh** to enter interactive mode in php-fpm container (/backend dir)

**./composer.sh [composer commands]** to run composer commands or enter bash (/backend dir)
