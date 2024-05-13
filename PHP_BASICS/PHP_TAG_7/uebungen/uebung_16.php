<?php

function calculate(int|float $number1, string $operator, int|float $number2,) : int|float|string
{
    if (!is_numeric($number1) || !is_numeric($number2)) {
        return 'please provide a numeric value only';
    }

    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '/':
            return $number1 / $number2;
        default:
            return 'please provide a valid operator';
        }
}

echo calculate(12, '*', 12);