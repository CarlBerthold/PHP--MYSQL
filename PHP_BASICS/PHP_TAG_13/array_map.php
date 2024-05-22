<?php

$stricttypes = true;

// array_map as example for callback functions

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function square(int $value) : int {
    return $value ** $value;
}


function cube(int $value) : int {
    return $value ** 3;
}


// array_map returns a new array with the results of the callback function
// the index of the new array is the same as the index of the original array
$squaredNumbers = array_map('square', $numbers);
$cubedNumbers = array_map('cube', $numbers);

var_dump($squaredNumbers);


/**
 * Applies a callback function to each element of an array and returns a new array with the results.
 *
 * @param callable $mapFunction The callback function to apply to each element.
 * @param array $array The input array.
 * @return array The new array with the results of applying the callback function to each element.
 */
function my_array_map(?callable $mapFunction, array $array) : array {
    $result = [];
    foreach($array as $index => $element) {
        $result[$index] = $mapFunction($element);
    }
    return $result;
}

// $test assigned to the result of the function call calling a callable function with a 
$test = my_array_map('cube', $numbers);