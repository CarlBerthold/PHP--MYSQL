<?php

declare(strict_types=1);



// $operation is a string that contains the name of the function to be called
// we could also use a callable type hint here
// but then we need a exeption handling for the case that the function does not exist
// now we never get to the else case 
/**
 * Calculates the result of a mathematical operation between two numbers.
 *
 * @param int|float $numberOne The first number.
 * @param int|float $numberTwo The second number.
 * @param string $operation The mathematical operation to perform.
 * @return int|float|string The result of the operation, or an error message if the operation is not valid.
 */
function calculate(int|float $numberOne, int|float $numberTwo, string $operation): int|float|string
{
    if(function_exists($operation)) {
        return $operation($numberOne, $numberTwo);
    } else {
        return "No valid operator given";
    }
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

/**
 * Validates the input data for a mathematical operation.
 *
 * @param array $formData The form data containing the numbers and operation.
 * @return bool Returns true if the input is valid, false otherwise.
 */
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