<?php

declare(strict_types=1);

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


function calculate(int|float $numberOne, int|float $numberTwo, string $operator): int|float|string
{
    switch ($operator) {
        case '+':
            return $result = sum($numberOne, $numberTwo);

        case '-':
            return $result = subtract($numberOne, $numberTwo);

        case '*':
            return $result = multiply($numberOne, $numberTwo);

        case '/':
            if ($numberTwo == 0) {
                return 'Cannot divide by zero';
            } else {
                return $result = divide($numberOne, $numberTwo);
            }
            break;

        default:
            return "No valid operator given";
    }
}

function validateInput(array $formData = []): bool
{
    if (
        !empty($formData['operator']) &&
        isset($formData['numberOne']) &&
        isset($formData['numberTwo']) &&
        is_numeric($formData['numberOne']) && 
        is_numeric($formData['numberTwo'])) {
        return true;
    } else {
        return false;
    }
}
