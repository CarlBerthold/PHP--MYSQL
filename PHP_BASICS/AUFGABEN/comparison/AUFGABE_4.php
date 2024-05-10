<?php
/**
 * Compare two numbers and display the result.
 *
 * @param mixed $number1 The first number to compare.
 * @param mixed $number2 The second number to compare.
 * @return void|string
 */
function compareNumbers($number1, $number2)
{
    if (!is_numeric($number1) || !is_numeric($number2)) {
        echo 'please provide a numeric value only';
        return 'please provide a numeric value only';
    }

    if ($number1 < $number2) {
        echo $number1 . ' is smaller than ' . $number2;
    } elseif ($number1 >= $number2) {
        echo $number1 . ' is bigger than ' . $number2;
    } else {
        echo $number1 . ' is equal to ' . $number2;
    }
}

compareNumbers(12, 12);