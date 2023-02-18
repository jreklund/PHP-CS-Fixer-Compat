<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer Compat.
 *
 * (c) Johan Eklund <hello@johaneklund.com>
 *
 * https://www.php-fig.org/psr/psr-4/examples/
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

spl_autoload_register(function (string $class): void {
    if (strncmp($class, 'PhpCsFixerCompat\\', 17) !== 0) {
        return;
    }

    $src = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

    $file = $src . str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 17)) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
