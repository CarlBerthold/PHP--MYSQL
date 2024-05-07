<?php

function dd($args) 
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();
}

function dump($args) 
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
}

$chips = ['5 tüten chips', '3 Flaschen Limonade'];

dump($chips);

// gehoistete Funktion
greet('Carl');

/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
function greet($name) 
{
    echo 'Hello ' . $name;
    return 'Hello ' . $name;
}

/**
 * Undocumented function
 *
 * @param [type] $name
 * @param string $salutation
 * @return void
 */
function greet_salutation($name, $salutation = 'Mr.') 
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



