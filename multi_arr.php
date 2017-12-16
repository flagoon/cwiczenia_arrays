<?php

$big = [
    'small' => [
        'key' => 'value'
    ],
];

var_export($big);
echo PHP_EOL, $big['small']['key'], PHP_EOL;

$big['small']['key'] = 'new_value';

echo PHP_EOL, $big['small']['key'], PHP_EOL;

unset($big['small']['key']);

echo PHP_EOL, $big['small']['key'], PHP_EOL;

var_export($big);