<?php

# array_filter ausprobiert

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function even($value)
{
/*     if($value % 2 === 0) {
        return true;
    } else {
        return false;
    } */

    # Refactoring
    return ($value % 2 === 0) ? true : false;

    # Refactoring
    return $value % 2 === 0;

    # Refactoring
    // return (bool)($value % 2);
}

var_dump(even(143));

$evenNumbers = array_filter($numbers, 'even');

var_dump($evenNumbers);

## mit anonymer Funktion

$oddNumbers = array_filter($numbers, function ($value) {
    return $value % 2 !== 0;
});


var_dump($oddNumbers);

## Beispiel aus php.net

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));
