<?php
declare(strict_types= 1);

$completed = true;
$score = 75;
$price = 0.5;
$greeting = "Hello";

$companies = [];
$array = [1, 2, 3, -9.2, 'A', true];

function sum(int $x, int $y) {
    var_dump($x, $y);
    echo '<br />';
    return $x + $y;
}

$sum = sum(2,3);

$x = (int) '5';

echo $x;
var_dump($x);
echo '<br/>';

echo $sum;