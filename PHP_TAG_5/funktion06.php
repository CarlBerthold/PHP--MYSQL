<?php

# Parameter

function sayHello($name)
{
    // Vorstellung: $name = 'Oli';
    echo 'hallo ' . $name, PHP_EOL;
}

// sayHello(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function sayHello(), 0 passed in ...

sayHello('Oli');
sayHello('Kurt');

$firstName = 'Susi';
sayHello($firstName);