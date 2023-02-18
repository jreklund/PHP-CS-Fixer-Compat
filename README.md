PHP Coding Standards Fixer Compat(ibility)
==========================

Use older versions of rules in [PHP-CS-Fixer][0] v3.14.4 (or newer?).

## Installation

```
composer require --dev jreklund/php-cs-fixer-compat
```

### Requirements

You must install either [friendsofphp/php-cs-fixer][0] or [php-cs-fixer/shim][1] (recommended) for this package to work.

```
composer require --dev friendsofphp/php-cs-fixer
```

```
composer require --dev php-cs-fixer/shim
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

## PHP-CS-Fixer/shim

:warning: Depending on how [PHP-CS-Fixer/shim][1] gets executed, you may need to
manually load `bootstrap.php` by requiring it in your `.php-cs-fixer.php`.

```php
$compatPath = implode(DIRECTORY_SEPARATOR, [
    __DIR__,
    'vendor',
    'jreklund',
    'php-cs-fixer-compat',
]);

$bootstrap = $compatPath . DIRECTORY_SEPARATOR . 'bootstrap.php';

if (file_exists($bootstrap)) {
    require $bootstrap;
}

// config starts here
```

## Rules

All compat rules follow the same naming scheme: `PhpCsFixerCompat/{rule}_{version}`.

All fixers can be found under the namespace: `PhpCsFixerCompat\Fixer\{custom-fixer}`.

---

| Rule    | Version | Compat Rule | Custom Fixer         |
| ------- | ------- | ----------- | -------------------- |
| braces  | 3.8.0   | braces_380  | Basic\BracesFixer380 |

[0]: https://github.com/PHP-CS-Fixer/PHP-CS-Fixer
[1]: https://github.com/PHP-CS-Fixer/shim
