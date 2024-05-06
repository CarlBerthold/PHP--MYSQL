<?php

# Stringverknüpfung
// Verkettungsoperator, Verknüpfungsoperator oder Konkatenationsoperator '.'

echo 'Hallo ' . 'Welt!' . "\n";

// verketten von Variablen

$firstName = 'Rasmus';
$lastName = 'Lerdorf';

echo $firstName . $lastName . PHP_EOL; // Leerzeichen fehlt

echo $firstName . ' ' . $lastName . PHP_EOL;

// zuweisen einer Verkettung 

$string = $firstName . "\t" . $lastName;

echo $string . PHP_EOL;