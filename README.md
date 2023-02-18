PHP Coding Standards Fixer Compat(ibility)
==========================

Use older versions of rules modified by [PHP-CS-Fixer][0].

## Installation

```
composer require --dev jreklund/php-cs-fixer-compat
```

## Usage

```php
$config = new PhpCsFixer\Config();

return $config
    ->registerCustomFixers([
        new PhpCsFixerCompat\Fixer\Basic\BracesFixer380(),
    ])
    ->setRules([
        '@PSR12' => true,
        'braces' => false,
        'PhpCsFixerCompat/braces_380' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
    );
```

## Rules

| Rule    | Version |
| ------- | ------- |
| braces  | 3.8.0   |

[0]: https://github.com/PHP-CS-Fixer/PHP-CS-Fixer
