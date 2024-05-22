<?php

// keyword function
/**
 * This function does something.
 * @return void
 */
function doIt() : void 
{
    echo 'Doing it';
}

/**
 * Anonymous function that echoes 'Doing it'.
 *
 * This anonymous function is assigned to the variable $doIt and when called, it will echo the string 'Doing it'.
 * @return void
 */
$doIt = function() :void 
{
    echo 'Doing it';
};


var_dump($doIt);

doIt();


/**
 * This anonymous function returns the string 'Doing it'.
 *
 * @return string The string 'Doing it'.
 */
fn() => 'Doing it';


/**
 * This is a lambda function that returns the string 'Doing it'.
 *
 * @return string The string 'Doing it'.
 */
$doIt = fn() => 'Doing it';


