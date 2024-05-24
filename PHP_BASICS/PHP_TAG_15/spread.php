<?php


function sum(...$numbers) 
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}

echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); // 55
echo sum(); // 0