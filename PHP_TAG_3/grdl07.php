<?php

# Funktion var_dump()

$string = 'Hallo Welt';

var_dump($string);

$number = 42;

var_dump($number);

// anstelle einer Variablen können auch Ausdrücke übergeben werden

var_dump(3 + 4 * 7);

// es können auch mehrere Variablen und/oder Ausdrücke übergeben werden

var_dump($string, $number, strtoupper('oli'), 7 * 8 % 3);


// var_dump() hat keine Rückgabenwert!!!

echo var_dump(17);

echo gettype(var_dump(17));

// zur Veranschaulichung: Datentyp array

$array = [1, 3, 5, 7, 9, 11, 'Oli'];

var_dump($array);