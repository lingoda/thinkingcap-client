#!/bin/bash

set -e

for dir in php-packages/*; do
  # notifier package has no tests as it's ported from SF5
  if [[ "$dir" == "php-packages/notifier" ]]; then
      continue
  fi

  echo "Running for $dir"
  cd "$dir"

  ../../linters/vendor/bin/phpstan analyse \
      -c "phpstan.neon" \
      "src" \
      --memory-limit=1G \
      --no-progress

  ../../linters/vendor/bin/phpstan analyse \
      -c "phpstan.test.neon" \
      "tests" \
      --memory-limit=1G \
      --no-progress

  cd ../..
done
