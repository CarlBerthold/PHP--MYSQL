<?php

function sum($value1 = 0, $value2 = 0)
{
    return $value1 + $value2;
}

function subtract($value1 = 0, $value2 = 0)
{
    return $value1 - $value2;
}

function multiply($value1 = 1, $value2 = 1)
{
    return $value1 * $value2;
}

function divide($value1 = 1, $value2 = 1)
{
    if($value1 == 0 || $value2 == 0)
    {
        return 'Cannot divide by zero';
    } else {
        return $value1 / $value2;
    }
}


/* $number1 = 5;
$number2 = 2;

$operator = '/';

switch($operator)
{
    case '+':
        echo 'addition' . sum($number1, $number2), PHP_EOL;
        break;
    case '-':
        echo 'subtraction' . subtract($number1, $number2), PHP_EOL;
        break;
    case '*':
        echo 'multiplication' . multiply($number1, $number2), PHP_EOL;
        break;
    case '/':
        if ($number1 != 0 && $number2 != 0) {
            echo 'division' . divide($number1, $number2), PHP_EOL;
        } else {
            echo 'Cannot divide by zero', PHP_EOL;
        }
        break;
    default:
        echo 'Please provide a valid operator (+, -, *, /)', PHP_EOL;
} */
/* echo ((true ? 'true' : false) ? 't' : 'f' ); */