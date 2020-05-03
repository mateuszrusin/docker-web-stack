#!/usr/bin/env bash

docker-compose down

OPTS=''

while getopts 'dfh' opt; do

  case ${opt} in
    d)
      OPTS+='d'
      ;;
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

if [ ! -z "${OPTS}" ]; then
    OPTS='-'${OPTS}
fi

docker-compose up ${OPTS} --remove-orphans
