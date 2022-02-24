<?php

use Illuminate\Support\Str;

Str::macro('swap', function ($map, $subject) {
    return str_replace(array_keys($map), array_values($map), $subject);
});
