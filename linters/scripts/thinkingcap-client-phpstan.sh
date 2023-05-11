#!/bin/bash

set -e

ls -lsa

linters/vendor/bin/phpstan analyse \
    -c "phpstan.neon" \
    "src" \
    --memory-limit=1G \
    --no-progress

linters/vendor/bin/phpstan analyse \
    -c "phpstan.test.neon" \
    "tests" \
    --memory-limit=1G \
    --no-progress

