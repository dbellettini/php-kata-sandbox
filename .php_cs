<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(false)
    ->setRules([
        'array_syntax' => ['syntax' => 'short'],
        '@PSR2' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
            ->in(__DIR__ . '/tests')
    )
;
