<?php

# Funktion print_r()

$string = 'Hallo Welt';

print_r($string);

$number = 42;

print_r($number);


// zur Veranschaulichung: Datentyp array

$array = [1, 3, 5, 7, 9, 11, 'Oli'];

print_r($array);

// 2-ter Parameter - ist dieser auf TRUE gesetzt, gibt print_r den Wert zurück und nicht aus

$structur = print_r($array, true);

echo strtoupper($structur);

# Funktion print - wie echo allerdings kann nur eine Variable bzw. ein Ausdruck ausgegeben werden

print $string . PHP_EOL;

// Fehlerhaft
print $string, $number, PHP_EOL; // => Parse error: syntax error, unexpected token "," ...