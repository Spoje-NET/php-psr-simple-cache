<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    $prefix = 'Psr\\SimpleCache\\';
    $len = strlen($prefix);
    if (strncmp($class, $prefix, $len) !== 0) {
        return;
    }
    $file = __DIR__ . '/' . str_replace('\\', '/', substr($class, $len)) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
