<?php

# Mockup zum Ausprobieren von array_key_last

$array = [1, 3, 4,];

print_r($array);

echo array_key_last($array), PHP_EOL;

// Elemente hinzufügen

$array[10] = 10;
$array[] = 11;
$array[5] = 5;

print_r($array);

echo array_key_last($array), PHP_EOL;
