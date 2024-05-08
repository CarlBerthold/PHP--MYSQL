<?php

# optionale Parameter

function sum($value1, $value2)
{
    $result = $value1 + $value2;
    echo $result, PHP_EOL;
}

sum(27, 25);
sum(3.1415, 2.76);
sum('3', '5.678');
// sum('3'); // => Fatal error: Uncaught ArgumentCountError: Too few arguments to function sum(), 1 

# 2-ten Parameter optional machen

function sum1($value1, $value2 = 0)
{
    $result = $value1 + $value2;
    echo $result, PHP_EOL;
}

sum1(3, 4);
sum1(3);

# mehrere Parameter optional machen

function sayHello($firstname, $lastname, $greeting = 'Hallo', $salutation = 'Dir')
{
    echo "$greeting, $firstname $lastname!\n";
    echo "Wie geht es $salutation?\n";
}

sayHello('Dagobert', 'Duck');
sayHello('Donald', 'Duck', 'QuackQuack');

## Welche Regeln gelten für optionale Parameter

function sayHello1($firstname = 'anonymos', $lastname = 'nobody', $greeting, $salutation)
{
    echo "$greeting, $firstname $lastname!\n";
    echo "Wie geht es $salutation?\n";
}

sayHello1('Hi', 'Ihnen'); // => Fatal error: Uncaught ArgumentCountError: Too few arguments to function sayHello1(), 2 passed in...

// => Parameter können nur von rechts nach links optionalisiert werden!