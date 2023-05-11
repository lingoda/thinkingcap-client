#!/bin/bash

set -e

for dir in php-packages/*; do
    cd "$dir"

    if [ -f phpspec.yaml ]; then
        vendor/bin/phpspec run
    fi

    cd ../..
done
