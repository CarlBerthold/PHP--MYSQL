<?php

declare(strict_types=1);

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

// $operation is a string that contains the name of the function to be called
// we could also use a callable type hint here
// but then we need a exeption handling for the case that the function does not exist
// now we never get to the else case 
function calculate(int|float $numberOne, int|float $numberTwo, string $operation): int|float|string
{

    if(function_exists($operation)) {
        return $operation($numberOne, $numberTwo);
    } else {
        return "No valid operator given";
    }

    /*  switch ($operator) {
        case '+':
            return add($numberOne, $numberTwo);

        case '-':
            return substract($numberOne, $numberTwo);

        case '*':
            return multiply($numberOne, $numberTwo);

        case '/':
            return divide($numberOne, $numberTwo);

        default:
            return "No valid operator given";
    } */
}

function validateInput(array $formData = []): bool
{
    if (
        isset($formData['numberOne']) &&
        isset($formData['numberTwo']) &&
        is_numeric($formData['numberOne']) &&
        is_numeric($formData['numberTwo']) &&
        !empty($formData['operation'])
        ) {
        return true;
    } else {
        return false;
    }
}