<?php

# array_map ausprobieren

function square($value) 
{
    return $value ** 2;
}


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$result = array_map('square', $numbers);

var_dump($result);

function cube($value)
{
    return $value ** 3;
}

$result = array_map('cube', $numbers);

var_dump($result);

// was passiert mit den keys?
unset($numbers[2], $numbers[4], $numbers[6]);
$numbers[99] = 99;


$result = array_map('cube', $numbers);

var_dump($result);

## eigene array_map

function my_array_map(callable $mapFunction, array $array) : array
{
    $result = [];

    foreach($array as $index => $element) {
        // Aufruf der Callback mittels call_user_func
        // $result[$index] = call_user_func($mapFunction, $element);

        // Aufruf der Callback als Variablen-Funktion
        $result[$index] = $mapFunction($element);
    }

    return $result;
}

$result = my_array_map('cube', $numbers);

var_dump($result);

// Typdeklartion callable

// $result = my_array_map(cube(4), $numbers); // Fatal error: Uncaught TypeError: my_array_map(): Argument #1 ($mapFunction) must be of type callable, int given, called in ...

// Was bedeutet das Fragezeichen vor der Typdeklaration callable in der PHP array_map

// $result = my_array_map(NULL, $numbers); // => Fatal error: Uncaught TypeError: my_array_map(): Argument #1 ($mapFunction) must be of type callable, null given, called in 

$result = array_map(NULL, $numbers);

var_dump($result);


