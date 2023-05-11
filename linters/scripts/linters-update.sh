#!/bin/sh

set -e

cd linters

NOW_DATE=$(date +"%s")

RUN_EVERY=$((3600*24*7))
FILE_NAME=.last_linters_update
LAST_COMPOSER_INSTALL_TIMESTAMP=0

if test -f "$FILE_NAME"; then
  read -r LAST_COMPOSER_INSTALL_TIMESTAMP<$FILE_NAME
fi

if [ $((NOW_DATE - LAST_COMPOSER_INSTALL_TIMESTAMP)) -ge $RUN_EVERY ]; then
  composer install
  yarn install

  echo "$NOW_DATE" > $FILE_NAME
fi
