<?php

# array_walk ausprobieren

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function square(&$number)
{
    echo "function square - \$number = $number\n";
    $number **= 2;
    // return $number;
}

array_walk($numbers, 'square');

var_dump($numbers);

## Beispiel aus php.net

$fruits = array("d" => "Zitrone", "a" => "Orange", "b" => "Banane", "c" => "Apfel");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2\n";
}

echo "Vorher ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'Frucht');
echo "... und nachher:\n";

array_walk($fruits, 'test_print');

var_dump($fruits);