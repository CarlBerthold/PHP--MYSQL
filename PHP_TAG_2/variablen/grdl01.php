<?php 
# Arithmetische Operatoren
// Additionsoperator
$ergebnis = 3 + 5;

echo $ergebnis;

echo PHP_EOL; # erwirkt einen Zeilumbruch in der Console
echo PHP_EOL; # eine PHP vordefinierte Konstante, die einen Zeilumbruch in der Console erwirkt

// Subtraktionoperator
$ergebnis = 42 - 8.5;

echo $ergebnis;
echo PHP_EOL;

// Multiplikationsoperator
$ergebnis = 5 * 7;

echo $ergebnis;
echo PHP_EOL;

// Divisionsoperator
$ergebnis = 49 / 7;

echo $ergebnis;


// Divisionsoperator, 2-tes Beispiel
$ergebnis = 49 / 0;

echo $ergebnis;
echo PHP_EOL;

// Rechnenoperation mit Variablen
$addition = 5 + 3;
$subtraktion = 7 - 2;
$multiplikation = $subtraktion * $subtraktion;
$division1 = $addition / 4;
$division2 = $addition / 3;

echo $addition;
echo PHP_EOL;
echo $subtraktion;
echo PHP_EOL;
echo $multiplikation;
echo PHP_EOL;
echo $division1;
echo PHP_EOL;
echo $division2;
echo PHP_EOL;

// Rechnenoperation mit Variablen, weiteres Beispiel
$addition = $addition + 7;
echo $addition; 
echo PHP_EOL;

// Modulooperator
$modulo = 141 % 13;

echo $modulo;
echo PHP_EOL;

// Potenzoperator
$potenz = 6 ** 3; # alternativ mittels pow-Funktion pow(6, 3)

echo $potenz;
echo PHP_EOL;