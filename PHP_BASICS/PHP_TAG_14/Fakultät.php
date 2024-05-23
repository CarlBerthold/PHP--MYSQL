<?php




// Fakultät n : n! = 1 * 2 * 3 * ... * n; 
  
/* 1! = 1; // 1! = 1 * 1; 
2! = 1 * 2 = 2 
3! = 1 * 2 * 3 = 6 
4! = 1 * 2 * 3 * 4 = 24 
...  
n! = 1 * 2 * 3 * ... * n */


function faculty($n) {
    $result = 1;
    for($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo faculty(6);


function recursiveFaculty ($n) {
    if($n > 1) {
        $result = recursiveFaculty($n - 1) * $n;
    } else {
        $result = $n;
    }
    return $result;
}

echo recursiveFaculty(3);


