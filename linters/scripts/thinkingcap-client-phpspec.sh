#!/bin/bash

set -e

if [ -f phpspec.yaml ]; then
    vendor/bin/phpspec run
fi
