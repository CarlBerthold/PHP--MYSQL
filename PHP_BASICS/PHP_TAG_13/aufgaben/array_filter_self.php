<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];


 function square(int $value) 
{
    return $value ** 2;
}

/**
 * Filters the elements of an array using a callback function.
 *
 * @param array $array The input array to filter.
 * @param callable|null $callback [optional] The callback function to use. If not provided, all elements of the array will be returned.
 * @param int $mode [optional] The filtering mode. Default is 0 (ARRAY_FILTER_USE_VALUE).
 * @return array The filtered array.
 */

function my_array_filter(array $array, ?callable $callback = null, int $mode = 0) : array {
    $result = [];
    foreach($array as $key => $value) {
        // if no callback is given or the callback returns true
        if($callback === null || $callback($value, $key, $array)) {
            // if mode is 1 or ARRAY_FILTER_USE_BOTH
            if ($mode === 1 || $mode === ARRAY_FILTER_USE_BOTH) {
                // returning both key and value
                $result[$key] = $value;
                // if mode is 2 or ARRAY_FILTER_USE_KEY
            } elseif ($mode === 2 || $mode === ARRAY_FILTER_USE_KEY) {
                // returning only the key
                $result[$key] = $key;
            } else {
                // returning only the value
                $result[] = $value;
            }
        }
    }
    return $result;
}
/* 
$result = my_array_filter($array, 'square', 0);
var_dump($result);
$result = my_array_filter($array, 'square', 1);
$result = my_array_filter($array, 'square', 2);
 */
$result = array_filter($array, 'square', 0);
var_dump($result);

$result = array_filter($array, 'square', 1);
$result = array_filter($array, 'square', 2);
