<?php

# Vergleich auf Wertegleichheit - Operator "=="

var_dump(3 == 3);
var_dump(3 == 4);

// Variablen vergleichen
$number1 = 3;
$number2 = 7;

var_dump($number1 == $number2);
var_dump($number1 == 3);
var_dump($number1 == 3 + 5 / 2);
var_dump($number1 == (1 + 5) / 2);

// unterschiedliche Datentypen

var_dump(3 == '3');
var_dump(3 == '3.0');
var_dump(3 == 3.0);
var_dump(3 == '3.0 ist eine interessante Zahl'); // ergibt false!!!!
var_dump(3 == (int)'3.0 ist eine interessante Zahl'); 


$var = 1;

var_dump($var == TRUE);
var_dump($var == FALSE);
var_dump($var == NULL);

$var = 0;

var_dump($var == TRUE);
var_dump($var == FALSE);
var_dump($var == NULL);

$var = FALSE;

var_dump($var == TRUE);
var_dump($var == FALSE);
var_dump($var == NULL);

var_dump(1 == 'Hallo');
var_dump(0 == 'Hallo');
var_dump(TRUE == 'Hallo');
var_dump(FALSE == 'Hallo');
var_dump(NULL == 'Hallo');

var_dump(1 == '');
var_dump(0 == '');
var_dump(TRUE == '');
var_dump(FALSE == '');
var_dump(NULL == '');

## => bei unterschiedlichen Datentypen sollte möglichst auf typschwache Vergleiche verzichtet werden

# Vergleich auf Identität - Operator "===" - das ist ein typstarker Vergleich

var_dump(3 === 3);
var_dump(3 === 4);

// Variablen vergleichen
$number1 = 3;
$number2 = 7;

var_dump($number1 === $number2);
var_dump($number1 === 3);
var_dump($number1 === 3 + 5 / 2);
var_dump($number1 === (1 + 5) / 2);
var_dump($number1 === (1 + 5) / 2.0);

// unterschiedliche Datentypen

var_dump(3 === '3');
var_dump(3 === '3.0');
var_dump(3 === 3.0);
var_dump(3 === '3.0 ist eine interessante Zahl'); 
var_dump(3 === (int)'3.0 ist eine interessante Zahl'); 

// "3 === '3'" das entspricht folgendem Vergleich : "3 == '3' && gettype(3) == gettype('3')"