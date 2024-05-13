<?php

$number = 4;

if ($number > 4) {
    echo 'The number is bigger than 4', PHP_EOL;
} elseif ($number < 4) {
    echo 'The number is smaller than 4', PHP_EOL;
} else {
    echo 'The number is equal to 4', PHP_EOL;
}


if ($number) {
    switch ($number) {
        case 1:
            echo 'The number is 1', PHP_EOL;
            break;
        case 2:
            echo 'The number is 2', PHP_EOL;
            break;
        case 3:
            echo 'The number is 3', PHP_EOL;
            break;
        case 4:
            echo 'The number is 4', PHP_EOL;
            break;
        default:
            echo 'The number is not 1, 2, 3 or 4', PHP_EOL;
    }
}


 $name = 'John';
//$name = '';
//$name = NULL;



/**
 * Checks if the variable $name is not empty and prints the corresponding message.
 *
 * @param string $name The name to be checked.
 * @return void
 */
if ($name) {
    echo 'The name is ' . $name, PHP_EOL;
} else {
    echo 'The name is empty', PHP_EOL;
}

/**
 * Checks if the variable $name is not empty and displays a message accordingly.
 *
 * @param string $name The name to be checked.
 * @return void
 */
if (!empty($name)) {
    echo 'The name is ' . $name, PHP_EOL;
} else {
    echo 'The name is empty', PHP_EOL;
}

// $name ? true : false;

/**
 * This code snippet prints the value of the variable $name if it is not empty.
 * If $name is empty, it prints a message indicating that the name is empty.
 *
 * @param string $name The name to be printed.
 * @return void
 */
echo $name ? 'The name is ' . $name : 'The name is empty', PHP_EOL;