<?php




// Fakultät n : n! = 1 * 2 * 3 * ... * n; 
  
/* 1! = 1; // 1! = 1 * 1; 
2! = 1 * 2 = 2 
3! = 1 * 2 * 3 = 6 
4! = 1 * 2 * 3 * 4 = 24 
...  
n! = 1 * 2 * 3 * ... * n */


/**
 * Calculates the factorial of a given number using iteration.
 * This function uses a for loop.
 *
 * @param int $n The number for which to calculate the factorial.
 * @return int The factorial of the given number.
 */
function faculty($n) {
    $result = 1;
    for($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo faculty(6);


/**
 * Calculates the factorial of a given number using recursion.
 * This function uses an if-else statement.
 *
 * @param int $n The number for which the factorial needs to be calculated.
 * @return int The factorial of the given number.
 */
function recursiveFaculty (int $n = 1) : int {
    if($n > 1) {
        $result = recursiveFaculty($n - 1) * $n;
    } else {
        $result = $n;
    }
    return $result;
}
echo recursiveFaculty(3);


/**
 * Calculates the factorial of a given number using recursion.
 * This function uses the ternary operator.
 *
 * @param int $n The number for which the factorial needs to be calculated.
 * @return int|float The factorial of the given number.
 */
function recursiveFaculty2 (int $n = 1) : int|float {
    return ($n > 1) ? recursiveFaculty2($n - 1) * $n : $n;
}

echo recursiveFaculty2(6);

// anonymous function with variable
// parent scope varibale via use keyword
// 
/**
 * Calculates the factorial of a given number recursively.
 * This function uses an anonymous function.
 *
 * @param int $n The number to calculate the factorial for.
 * @return int The factorial of the given number.
 */
$recursiveFaculty2 = function (int $n) use (&$recursiveFaculty2) {
    return ($n > 1) ? $recursiveFaculty2($n - 1) * $n : $n;
};
echo $recursiveFaculty2(6);


// arrow function
// parent varibale need to be passed as argument
// recursive call function need also to be passed the parent varibale as argument
/**
 * Calculates the factorial of a given number using recursion.
 *
 * @param callable $recursiveFaculty3 The recursive function to calculate the factorial.
 * @param int $n The number to calculate the factorial for.
 * @return int The factorial of the given number.
 */
$recursiveFaculty3 = fn ($recursiveFaculty3, int $n) => ($n > 1) ? $recursiveFaculty3($recursiveFaculty3, $n - 1) * $n : $n;

echo $recursiveFaculty3($recursiveFaculty3, 6);



/**
 * currying
 * Calculates the factorial of a given number.
 * we dont need to parse the the varibale to the function
 * 
 * @param int $fac The factorial function.
 * @return int The factorial of the given number.
 */
$fac = fn($fac) => fn($n = 1) => ($n > 1) ? $fac($fac)($n - 1) * $n : 1;

/**
 * currying
 * Calculates the factorial of a given number.
 * we call the function with the number only
 *
 * @param int $n The number to calculate the factorial for.
 * @return int The factorial of the given number.
 */
$faculty = $fac($fac);

echo $faculty(6) . PHP_EOL;
echo $faculty(20) . PHP_EOL;