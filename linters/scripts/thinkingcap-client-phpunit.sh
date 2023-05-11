#!/bin/bash

set -e

if test -f "vendor/bin/paratest"; then
  vendor/bin/paratest -c phpunit.xml.dist
elif test -f "vendor/bin/simple-phpunit"; then
  vendor/bin/simple-phpunit -c phpunit.xml.dist
elif test -f "vendor/bin/phpunit"; then
  vendor/bin/phpunit -c phpunit.xml.dist
fi
