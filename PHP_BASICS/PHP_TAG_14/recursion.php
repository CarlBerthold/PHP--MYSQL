<?php


// as a iteration
$result = 0;

for($i = 1; $i <= 16; $i++) {
    $result += $i;
}

echo $result;

// as a function 

function sumFormula(int|float $value = 1) : int|float 
{
    $result = 0;
    for($i = 1; $i <= $value; $i++) {
        $result += $i;
    }

    return $result;
}

echo sumFormula(16);


// recursion with a recursion

function sumFormula1()
{
    sumFormula1();
}

echo sumFormula1();


function sumFormularRecursive(int $n = 1) : int
{
    if($n > 1) {
        return $n = sumFormularRecursive($n - 1) + $n;
    } else {
        return $n;
    }
}

echo sumFormularRecursive(17);

function sumFormularRecursiveSteps(int $n = 1)
{
    echo 'Aufruf' . __FUNCTION__ . 'mit Wert' . $n . PHP_EOL;
    if($n > 1) {
        $result = sumFormularRecursiveSteps($n - 1) + $n;
    } else {
        $result = $n;
    }
    echo 'Rückgabe' . __FUNCTION__ . 'mit Wert' . $result . PHP_EOL;
    return $result;
}

echo sumFormularRecursiveSteps(16);
