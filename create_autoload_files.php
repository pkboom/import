<?php

echo PHP_EOL.'This will create a `autoload/files` in `composer.json`'.PHP_EOL;
echo 'Make sure you are in a project. Ready?'.PHP_EOL;

$f = fopen('php://stdin', 'r');

$line = fgets($f);

fclose($f);

$root = getcwd();

$file = "$root/composer.json";

if (!file_exists($file)) {
    echo 'composer.json doesn\'t exist.'.PHP_EOL;

    return;
}

$composer = json_decode(file_get_contents($file), true);

if (array_key_exists('files', $composer['autoload'])) {
    echo '`files` exists.'.PHP_EOL;

    return;
}

$composer['autoload']['files'] = [
    'app/helpers.php',
];

file_put_contents($file, json_encode($composer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
