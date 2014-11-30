PHP Kata Sandbox
================
This is a simple skeleton for starting a TDD Kata in PHP.
I find this useful when I develop a new PHP library from scratch.

## Getting started
To begin a new TDD Kata just ask composer to create a new project based on this repository.
Thanks to @edelprino I added a simple bash script to do it.

```curl -sS https://raw.github.com/dbellettini/php-kata-sandbox/master/install | sh```

## Running tests
PHPUnit is embedded in vendor folder, just type:

```cd kata-sandbox && bin/phpunit ```

## Keeping your coding style PSR-{1,2} compliant
Optional step, just copy hooks/pre-commit file to your .git/hooks folder
