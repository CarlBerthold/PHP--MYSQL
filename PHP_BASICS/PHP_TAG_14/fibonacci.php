<?php

// Fibonacci sequence via recursion
function fibonacci($n = 2) {
    if ($n < 2) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
 } 
   
 echo fibonacci(20); //6765 [Done] exited with code=0 in 0.635 seconds



// Fibonacci sequence via recursion with ternary operator
// in this recursion we have to calculate the same number multiple times
// this is not efficient and can be optimized
// https://www.youtube.com/watch?v=e0CAbRVYAWg
 
function fibonacci2($n = 2) {
    return ($n < 2) ? $n : fibonacci2($n - 1) + fibonacci2($n - 2);
}

echo fibonacci2(20); //6765 [Done] exited with code=0 in 0.159 seconds


/**
 * Calculates the Fibonacci number at the given position using an optimized approach.
 * This function uses a for loop to iterate through the numbers execept the first and second number of the Fibonacci.
 * if we use recursion we have to calculate the same number multiple times
 *
 * @param int $n The position of the Fibonacci number to calculate (default is 2).
 * @return int The Fibonacci number at the given position.
 */
function optimizedFibonacci(int $n = 2) {
    if($n > 2) {
        // initialize the first two numbers of the Fibonacci sequence bcs we know them and they dont have to be calculated again and again
        $fibonacci = [0, 1]; 
        // iterate through the numbers except the first and second number of the Fibonacci
        for ($i = 2; $i <= $n; $i++) {
            // assigning the first and second number of the Fibonacci to the next number of the iteration 
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        // return the Fibonacci number at the given position 
        return $fibonacci[$n];
    }
    // return the Fibonacci number at the given position
    return $n;
}

echo optimizedFibonacci(20); // 6765 [Done] exited with code=0 in 0.135 seconds
