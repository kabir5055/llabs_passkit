<?php declare(strict_types=1);

use Luminouslabs\CodeStyle\Config;
use PhpCsFixer\Finder;
use PhpCsFixerCustomFixers\Fixer\CommentedOutFunctionFixer;

require __DIR__ . '/vendor/autoload.php';

return (new Config)
    ->setFinder(Finder::create()->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]))
    ->setRules([
        '@Luminouslabs' => true,
        '@Luminouslabs:risky' => true,
        CommentedOutFunctionFixer::name() => [
            'functions' => ['dd', 'dump', 'ini_set', 'print_r', 'var_dump', 'var_export'],
        ],
    ])
    ->setRiskyAllowed(true);
