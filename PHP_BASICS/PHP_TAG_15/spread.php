<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


function sum9(...$numbers) 
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}

// echo sum9(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // 55
// echo sum9(); // 0
echo sum9(...$numbers);