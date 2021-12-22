<?php

echo 'This will create a `autoload/files` in `composer.json`'.PHP_EOL;
echo 'Make sure you are in a project. Ready?'.PHP_EOL;

$f = fopen('php://stdin', 'r');

$line = fgets($f);

fclose($f);

$root = getcwd();

$path = "$root/composer.json";

if (!file_exists($path)) {
    echo 'composer.json doesn\'t exist.'.PHP_EOL;

    exit(1);
}

$composer = json_decode(file_get_contents($path), true);

if (array_key_exists('files', $composer['autoload'])) {
    echo '`files in composer.json` exists.'.PHP_EOL;

    exit(1);
}

$helpers = "$root/app/helpers.php";

if (!file_exists($helpers)) {
    echo 'helpers.php exists.'.PHP_EOL;

    exit(1);
}

$composer['autoload']['files'] = [
    'app/helpers.php',
];

file_put_contents($path, json_encode($composer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
