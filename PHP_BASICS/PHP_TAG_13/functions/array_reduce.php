<?php

# array_reduce ausprobiert

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function sumUp($carry, $value)
{
    return $carry += $value;
}

$sum = array_reduce($numbers, 'sumUp', 0);

var_dump($sum);

$numbers = [1, 22, 3, 44, 5, 61, 7, 8, 9];

// Maximum herausfinden

function getMax($carry, $element)
{
    return ($carry > $element) ? $carry : $element;
}
$max = array_reduce($numbers, 'getMax', PHP_INT_MIN);

$numbers = [-1, -22, -3, -44, -5, -61, -7, -8, -9];
$max = array_reduce($numbers, 'getMax');

var_dump($max);

