<?php

# Inkrement '++' und Dekrement '--'

// Inkrementoperator (Post-Inkrement)

// Wert um eins erhöhen
$number = 13;
$number = $number + 1;
echo $number, PHP_EOL;

// mit addierenden Zuweisungsoperator
$number = 13;
$number += 1;
echo $number, PHP_EOL;

// mit dem Inkrementoperator
$number = 13;
$number++;
echo $number, PHP_EOL;

// Dekrementoperator - Wert um eins verringern (Post-Dekrement)
$number = 13;
$number--;
echo $number, PHP_EOL;

## Funktioniert ein Inkrement- oder Dekrementoperator auch bei Fließkommazahlen?
$number = 3.1415;
$number++;
echo $number, PHP_EOL;


# Prä-Inkrementoperator

$number = 13;
++$number;
echo $number, PHP_EOL;

# Prä-Dekrementoperator

$number = 13;
--$number;
echo $number, PHP_EOL;

## Unterschied zwischen Prä- und Post-Inkrement

$number1 = 5;
$number2 = 7;

$result = $number1++ + $number2;
// $result = 5 + 7;
// $number1 = 5 + 1;

echo $result, PHP_EOL;
echo $number1, PHP_EOL;
echo $number2, PHP_EOL;

// Ergebnis ist 12


$number1 = 5;
$number2 = 7;

$result = ++$number1 + $number2;
// $number1 = 5 + 1;
// $result = 6 + 7;

echo $result, PHP_EOL;
echo $number1, PHP_EOL;
echo $number2, PHP_EOL;

// Ergebnis 13







