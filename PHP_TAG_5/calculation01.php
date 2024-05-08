<?php

function sum($value1 = 0, $value2 = 0)
{
    // var_dump($value1, $value2);
    $result = $value1 + $value2;
    echo $result, PHP_EOL;
}

function subtract($value1 = 0, $value2 = 0)
{
    $result = $value1 - $value2;
    echo $result, PHP_EOL;
}

function multiply($value1 = 1, $value2 = 1)
{
    $result = $value1 * $value2;
    echo $result, PHP_EOL;
}

function divide($value1 = 1, $value2 = 1)
{
    $result = $value1 / $value2;
    echo $result, PHP_EOL;
}


// Testen
echo "Addition:\n";
sum(3, 7);
sum(4);
sum();

// var_dump($result, $value1, $value2);
echo "Subtraktion:\n";
subtract(17, 8);
subtract(42);
subtract();

echo "Multiplikation:\n";
multiply(17, 8);
multiply(42);
multiply();

echo "Division:\n";
divide(17, 8);
divide(42);
divide();