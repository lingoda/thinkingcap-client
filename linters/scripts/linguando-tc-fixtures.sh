#!/bin/sh

set -e

ARGS=$*

php linguando/bin/console lg:lms:refresh-fixtures ${ARGS}

WORKING_DIR=$(pwd)

cd linguando
php vendor/bin/phpunit tests/Thinkingcap/Facade
php vendor/bin/phpunit tests/Thinkingcap/Resolver

git add tests/Thinkingcap/fixtures

cd "$WORKING_DIR"
