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
function greet_salutation($name, $salutation = 'Mr.') : string
{
    echo $name . $salutation;
    return $salutation . ' ' . $name;
}


greet_salutation('John');

function test() 
{
    echo 'Hello';
    return 'Hello';
}

function test2() 
{
    echo 'world';
    return 'Hello';
}



// Call a function wihtin another function
function functionCallInFunction()
{
   test();
   test2();
}


functionCallInFunction();



