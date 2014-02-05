PHP Kata Sandbox
================
This is a simple skeleton for starting a TDD Kata in PHP.
I find this useful when I develop a new PHP library from scratch.

## Getting started
To begin a new TDD Kata just ask composer to create a new project based on this repository.

```composer create-project dbellettini/kata-sandbox /path/to/your/project ~0.1```

## Running tests
PHPUnit is embedded in vendor folder, just type:

```bin/phpunit ```

## Keeping your coding style PSR-{1,2} compliant
Optional step, just copy hooks/pre-commit file to your .git/hooks folder
