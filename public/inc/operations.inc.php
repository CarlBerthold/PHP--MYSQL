<?php


function getOperator() : array{
    return [
        'add' => '+', 
        'substract' => '-', 
        'multiply' => '*', 
        'divide' => '/', 
        'modulo' => '%',
        'nthRoot' => '√',
    ];
}


function add(int|float $value1, int|float $value2) : int|float
{
    return $value1 + $value2;
}

function substract(int|float $value1, int|float $value2) : int|float
{
    return $value1 - $value2;
}

function multiply(int|float $value1, int|float $value2) : int|float
{
    return $value1 * $value2;
}

function divide(int|float $value1, int|float $value2) : int|float|string
{
    if ($value2 !== 0) {
        $result = $value1 / $value2;
    } else {
        $result = 'Division by zero';
    }

    return $result;
}

function modulo(int|float $value1, int|float $value2) : int|float|string
{
    if ($value2 !== 0) {
        $result = $value1 % $value2;
    } else {
        $result = 'Modulo by zero';
    }

    return $result;
}

function nthRoot(int|float $value1, int|float $value2) : int|float|string
{
    if ($value2 !== 0) {
        $result = pow($value1, 1/$value2);
    } else {
        $result = 'Root by zero';
    }

    return $result;
}
