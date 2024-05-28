<?php

// define constant FILE_NAME with value hello_world.txt
// 
define('FILE_NAME', 'hello_world.txt');
echo FILE_NAME;

// define constant FILE_NAME_1 with value hello_world.txt
const FILE_NAME_1 = 'hello_world.txt';
echo FILE_NAME_1;


// cant define constant with value of function

/**
 * This constant represents a function that takes two values and returns their sum.
 *
 * @param mixed $value1 The first value.
 * @param mixed $value2 The second value.
 * @return mixed The sum of $value1 and $value2.
 */
const Function1 = function($value1, $value2)
{
    return $value1 + $value2;
};

echo Function1(4,5);


// define constant Function2 with value of function
/**
 * Defines a constant named 'Function2' with a value of an anonymous function.
 *
 * This constant represents a function that takes two parameters and returns their sum.
 *
 * @param mixed $value1 The first value to be added.
 * @param mixed $value2 The second value to be added.
 * @return mixed The sum of $value1 and $value2.
 */
define ('Function2', function($value1, $value2)
{
    return $value1 + $value2;
});


echo(Function2)(4,5);