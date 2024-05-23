<?php

// Fibonacci sequence via recursion
function fibonacci($n = 2) {
    if ($n < 2) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
 } 
   
 echo fibonacci(6);



// Fibonacci sequence via recursion with ternary operator
// while finding $nth number in the Fibonacci sequence we have double recursion checking the same number twice
// this is not efficient and can be optimized
 
function fibonacci2($n = 2) {
    return ($n < 2) ? $n : fibonacci2($n - 1) + fibonacci2($n - 2);
}

echo fibonacci2(6);


function optimizedFibonacci(int $n = 2) {
    if($n < 2) {
        return optimizedFibonacci($n - 1) + optimizedFibonacci($n - 2);
    }
    return $n;
}

echo optimizedFibonacci(6);
