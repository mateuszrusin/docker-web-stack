#!/usr/bin/env bash

docker-compose down

OPTS='-d'

while getopts 'fh' opt; do

  case ${opt} in
    f)
      docker-compose build --force --no-cache --parallel
      ;;
    h)
      help
      exit 0
      ;;
    \?)
      echo "Invalid option: -${OPTARG}" >&2
      exit 1
      ;;
    :)
      echo "Option -${OPTARG} requires an argument." >&2
      exit 1
      ;;
  esac
done
shift $((OPTIND-1))

docker-compose up ${OPTS} --remove-orphans
