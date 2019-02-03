## humbug/box with humbug/php-scoper Prefixing Demo

[![Build Status](https://img.shields.io/travis/TomasVotruba/dummy-phar/master.svg?style=flat-square)](https://travis-ci.org/TomasVotruba/dummy-phar)

The goal of this repository is to wrap `/bin` + `/src` to standalone and prefixed `dummy.phar`.

## Features

- `vendor/autoload.php` path is prefixed with `dummy-phar://phar` and included 
- working Symfony autodiscovery 
- `Dummy\*` namespace is whitelisted, so users can extend it
- uses `Symfony\Console`
- uses `Symfony\HttpKernel`
