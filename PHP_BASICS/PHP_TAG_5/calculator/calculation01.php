<?php

function sum($value1 = 0, $value2 = 0)
{
    // var_dump($value1, $value2);
    $result = $value1 + $value2;
    echo $result, PHP_EOL;
}

function subtract($value1 = 0, $value2 = 0)
{
    $result = $value1 - $value2;
    echo $result, PHP_EOL;
}

function multiply($value1 = 1, $value2 = 1)
{
    $result = $value1 * $value2;
    echo $result, PHP_EOL;
}

function divide($value1 = 1, $value2 = 1)
{
    $result = $value1 / $value2;
    echo $result, PHP_EOL;
}


$number1 = 5;
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
}

echo ((true ? 'true' : false) ? 't' : 'f' );