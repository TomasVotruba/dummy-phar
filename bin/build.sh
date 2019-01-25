#!/usr/bin/env bash

# create build
cp bin/run build/bin/run
cp src build/src
cp composer.json build/composer.json

# composer
composer require --no-update dg/composer-cleaner:^2.0 -d build
composer update --no-dev --classmap-authoritative build

# build + prefix
vendor/bin/box compile build --config box.json