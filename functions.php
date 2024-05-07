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


function greet($name) 
{
    echo 'Hello ' . $name;
    return 'Hello ' . $name;
}

function greet_salutation($name, $salutation = 'Mr.') 
{
    echo $name . $salutation;
    return $salutation . ' ' . $name;
}

greet('Carl');
greet_salutation('John');