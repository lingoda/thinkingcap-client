#!/bin/sh

set -e

composer update "$@" --no-interaction --no-progress --prefer-dist

if test -f "vendor/bin/paratest"; then
    vendor/bin/paratest -c phpunit.xml.dist --version
elif test -f "vendor/bin/simple-phpunit"; then
    vendor/bin/simple-phpunit -c phpunit.xml.dist --version
elif test -f "vendor/bin/phpunit"; then
    vendor/bin/phpunit -c phpunit.xml.dist --version
fi
