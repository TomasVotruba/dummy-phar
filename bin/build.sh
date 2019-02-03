#!/usr/bin/env bash

# show each line before run
set -o xtrace

# create build
rm -rf build

mkdir -p build/bin
cp bin/run build/bin/run
cp -r config build/config
cp -r packages build/packages
cp -r src build/src
cp -r vendor build/vendor
cp composer.json build/composer.json

# copy configs
cp box.json build/box.json

# build + prefix
./box.phar compile --working-dir build
