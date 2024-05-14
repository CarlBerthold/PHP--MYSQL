<?php
/**
 * Checks if a number is even or odd with a if statement.
 *
 * @param int $number The number to check.
 * @return string The result indicating whether the number is even or odd.
 */
function is_even(int $number) : string {
    if($number % 2 === 0){
        return 'The number is even';
    } else {
        return 'The number is odd';
    }
}
echo is_even(2.5);


/**
 * Determines whether a number is even or odd with a ternary operator.
 *
 * @param int $number The number to be checked.
 * @return string The message indicating whether the number is even or odd.
 */
function is_even2(int $number) : string {
    return $number % 2 === 0 ? 'The number is even' : 'The number is odd';
}

echo is_even2(3);

/**
 * Checks if a number is odd or even with a if statement.
 *
 * @param int $number The number to be checked.
 * @return string The result indicating if the number is odd or even.
 */
function is_odd(int $number) : string {
    if($number % 2 !== 0){
        return 'The number is not even';
    } else {
        return 'The number is not odd';
    }
}

echo is_odd(4.3);

/**
 * Checks if a number is odd or even with the ternary operator.
 *
 * @param int $number The number to be checked.
 * @return string The result indicating if the number is odd or even.
 */
function is_odd2(int $number) : string {
    return $number % 2 !== 0 ? 'The number is not even' : 'The number is not odd';
}

echo is_odd2(3);









function is_odd3(int|string $number) : string {
   return (is_even3($number));
}

function is_even3(int $number) : int|string {
    return $number % 2 === 0 ? 'The number is even' : 'The number is odd';
}

//echo is_odd3(3);
echo is_even3(3);

