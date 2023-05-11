#!/bin/sh

set -e

ARGS=$*

php linguando/bin/console lg:serializer:dump ${ARGS}
linters/vendor/bin/ecs check --fix --config=linters/ecs.php linguando/src/Resources/stubs
