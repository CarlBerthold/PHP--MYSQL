<?php

# Funktionsrückgabe

function sum($value1 = 0, $value2 = 0)
{
    // var_dump($value1, $value2);
    $result = $value1 + $value2;
    return $result;
}

function subtract($value1 = 0, $value2 = 0)
{
    $result = $value1 - $value2;
    return $result;
}

function multiply($value1 = 1, $value2 = 1)
{
    $result = $value1 * $value2;
    return $result;
}

function divide($value1 = 1, $value2 = 1)
{
    $result = $value1 / $value2;
    return $result;
}


// Testen
echo "Addition:\n";
echo sum(3, 7), PHP_EOL;
echo sum(4), PHP_EOL;
echo sum(), PHP_EOL;

// var_dump($result, $value1, $value2);
echo "Subtraktion:\n";
echo subtract(17, 8), PHP_EOL;
echo subtract(42), PHP_EOL;
echo subtract(), PHP_EOL;

echo "Multiplikation:\n";
echo multiply(17, 8), PHP_EOL;
echo multiply(42), PHP_EOL;
echo multiply(), PHP_EOL;

echo "Division:\n";
echo divide(17, 8), PHP_EOL;
echo divide(42), PHP_EOL;
echo divide(), PHP_EOL;