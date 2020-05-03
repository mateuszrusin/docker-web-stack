#!/usr/bin/env bash

case $1 in
    i | install  ) bin/install.sh ${@:2} ;;
    s | start    ) bin/start.sh ${@:2} ;;
    composer     ) bin/composer.sh ${@:2} ;;
    console      ) bin/console.sh ${@:2} ;;
    db           ) bin/db.sh ${@:2} ;;
    node         ) bin/node.sh ${@:2} ;;
    php          ) bin/php.sh ${@:2} ;;
esac