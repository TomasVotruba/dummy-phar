#!/usr/bin/env bash

# show each line before run
set -o xtrace

# create build
mkdir -p build/bin
cp bin/run build/bin/run
cp -r src build/src
cp -r vendor build/vendor
cp composer.json build/composer.json

# copy configs
cp box.json build/box.json

# build + prefix
mkdir -p tmp/build
./box.phar compile --working-dir build
