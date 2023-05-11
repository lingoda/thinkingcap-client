#!/bin/bash

set -e

for dir in php-packages/*; do
  echo "Running for $dir"

  if test -f "${dir}/vendor/bin/paratest"; then
    ${dir}/vendor/bin/paratest -c ${dir}/phpunit.xml.dist
  elif test -f "${dir}/vendor/bin/simple-phpunit"; then
    ${dir}/vendor/bin/simple-phpunit -c ${dir}/phpunit.xml.dist
  elif test -f "${dir}/vendor/bin/phpunit"; then
    ${dir}/vendor/bin/phpunit -c ${dir}/phpunit.xml.dist
  fi
done
