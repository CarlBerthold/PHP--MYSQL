<?php

require __DIR__ . '../../../helpers.php';


if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";



/**
 * sort — Sortiert ein Array in aufsteigender Reihenfolge
 * 
 *  sort(array &$array, int $flags = SORT_REGULAR): bool
 * 
 * https://www.php.net/manual/de/function.sort.php
 * 
 */


# sort-Funktion bei numerischen Werten

$numbers = [1 => 2.5, 3 => 1.5, 5 => 3.75, 9 => 1.25];

sort($numbers);

dump($numbers);

dd($numbers);



# sort-Funktion bei Strings

$programmiersprachen = ['PHP', 'JavaScript', 'Ruby', 'perl'];

sort($programmiersprachen);

var_dump($programmiersprachen);



# sort-Funktion bei genummerten Strings

$files = [
    'bild25.png',
    'Bild2.jpg',
    'bild10.jpg',
    'bild3.jpg',
    'BILD6.JPG',
    'bild1.jpg',
];

sort($files);

var_dump($files);

$files = [
    'bild25.png',
    'Bild2.jpg',
    'bild10.jpg',
    'bild3.jpg',
    'BILD6.JPG',
    'bild1.jpg',
];

sort($files, SORT_STRING | SORT_FLAG_CASE);

var_dump($files);


$numbers = ['2', '10', '4', '1'];

sort($numbers);
sort($numbers, SORT_STRING);

var_dump($numbers);


$files = [
    'bild10.jpg',
    'BILD6.JPG',
    'bild25.png',
    'bild1.jpg',
    'bild3.jpg',
    'Bild2.jpg',
];

sort($files, SORT_NATURAL | SORT_FLAG_CASE);

var_dump($files);



# sort-Funktion bei gemischente Datentypen mit Flags - SORT_NATURAL

// zum Testen

// $files = ['bild2.jpg', '0', 'bild10.jpg', '-5', 'Bild4.jpg', 'bild1.jpg', '3', '1'];
// $files = ['bild2.jpg', 0, '0', -5, 'bild10.jpg', '-5', 'Bild4.jpg', 1, 'bild1.jpg', '3', '1', 3];
$files = ['bild2.jpg', 0, 13 => NULL, '0', -5, 'bild10.jpg', true, '-5', 'Bild4.jpg', 1, 'bild1.jpg', false, '3', '1', 3];

sort($files, SORT_NATURAL | SORT_FLAG_CASE);

var_dump($files);



$numbers = [
    1 => 3.5, 
    3 => 1.5, 
    4 => 3.25, 
    8 => 1.75,
    2 => -2,
    7,
    5,
    0.5
];



// rekursiver Ansatz von top

// $n --> übergebener Wert der gewünschten Fibonacci-Zahl
// $i --> Zähler für Durchläufe
// $f --> Fibonacci-Zahl
// $nf --> neue Fibonacci-Zahl

function topFibonacci( int $n, int $i = 1, int $f = 0, int $nf = 1) : int
{
    // echo $f . PHP_EOL; # Zwischenergebnisse
    return $i++ <= $n ? topFibonacci( $n, $i, $nf, $nf + $f) : $f;
}
echo topFibonacci(0);

// rekursiver Ansatz von top

// $n --> übergebener Wert der gewünschten Fibonacci-Zahl
// $i --> Zähler für Durchläufe
// $f --> Fibonacci-Zahl
// $nf --> neue Fibonacci-Zahl