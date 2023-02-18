<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer Compat.
 *
 * (c) Johan Eklund <hello@johaneklund.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

spl_autoload_register(function (string $class): void {
    if (strncmp($class, 'PhpCsFixerCompat\\', 17) !== 0) {
        return;
    }

    $src = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

    require $src . str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 17)) . '.php';
});
