<?php

// Arrays

$programmingLanguages = [
    'php' => [
        'creator'=> 'mr saxobeat',
        'extension'=> true,
        'versions'=>[
            ['version' => '8','releaseDate'=> 'Nov 26, 2023'],
            ['version'=> '7,4','releaseDate'=> 'Dec 21, 2019'],
        ]
    ]
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages[] = '1.15';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php']['extension'];

$array = [1, 2, 3];

echo array_pop($array);

echo array_shift($array);

echo '<pre>';
print_r($array);
echo '</pre>';

unset($array[0]);

echo '<pre>';
print_r($array);
echo '</pre>';

$x = 5;

var_dump((array)$x);

$x = (array) $x;

var_dump(array_key_exists('0', $x));