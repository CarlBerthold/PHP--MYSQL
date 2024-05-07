<?php

/**
 * die and dump
 *
 * @param mixed $args
 * @return void
 */
function dd($args) : void
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();
}

/**
 * Undocumented function
 *
 * @param mixed $args
 * @return void
 */
function dump($args) : void
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
}

/**
 * gehoistete Funktion
 */
$chips = ['5 tüten chips', '3 Flaschen Limonade'];
dump($chips);
greet('Carl');

/**
 * Undocumented function
 *
 * @param string $name
 * @return string
 */
function greet($name) : string
{
    echo 'Hello ' . $name;
    return 'Hello ' . $name;
}

/**
 * Undocumented function
 *
 * @param string $name 
 * @param string $salutation
 * @return string
 */
function greeting($name, $salutation = 'Mr.') : string
{
    // global $name; dont use global variables sideeffects global declares a variable with NULL
    echo $salutation . ' ' . $name;
    return $salutation . ' ' . $name;
}

$name = 'Carl';
greeting('John');


/**
 * Undocumented function
 *
 * @return void
 */
function test() 
{
    echo 'Hello';
    // return 'Hello';
}

/**
 * Undocumented function
 * 
 * @return void
*/

function test2() 
{
    echo 'world';
    // return 'Hello';
}


/**
 * Undocumented function
 *
 * @return void
 */
function functionCallInFunction()
{
   test();
   test2();
}


functionCallInFunction();


/**
 * nested function outer() needs to be called first to declare inner(), before calling outer() inner() will not exist
 *
 * @return void
 */
function outer()
{
    function inner()
    {
        echo 'function inner()', PHP_EOL;
    }
    inner();
    echo 'function outer()', PHP_EOL;
}


outer();
var_dump(function_exists('inner'));
inner();
outer();
