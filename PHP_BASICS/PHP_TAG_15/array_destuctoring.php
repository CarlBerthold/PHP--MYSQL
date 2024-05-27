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



// aus WBT Lekt 20.4

[$a, $b, $c] = [1, 2, 3];

/* $a = $datenarray[0]
$b = $datenarray[1]
$c = $datenarray[2] */

var_dump($a, $b, $c); // $a = 1, $b = 2, $c = 3

// PHP list-Sprachkonstrukt


$info = array('Kaffee', 'braun', 'Koffein');

// Auflisten aller Variablen
list($drink, $color, $power) = $info;

var_dump($drink, $color, $power);