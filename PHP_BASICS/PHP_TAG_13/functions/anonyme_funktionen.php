<?php

# Vorbetrachtung: Literal
## https://de.wikipedia.org/wiki/Literal

## Was ist ein Literal

42;
'hallo welt';

var_dump(42);
var_dump('hallo welt');

echo gettype(42), PHP_EOL;
echo gettype('hallo welt'), PHP_EOL;

echo is_int(42), PHP_EOL;
echo is_string('hallo welt'), PHP_EOL;

echo 42, PHP_EOL;
echo 'hallo welt', PHP_EOL;

## spezielle Literal - Funktionsliteral

function () {
    echo 'hallo welt', PHP_EOL;
};

var_dump(function () {
    echo 'hallo welt', PHP_EOL;
});

echo gettype(function () {
    echo 'hallo welt', PHP_EOL;
}), PHP_EOL;

echo is_object(function () {
    echo 'hallo welt', PHP_EOL;
}), PHP_EOL;

## Funktionsliteral - anonyme Funktion, Closure, Lambda-Funktion oder Lambda-Ausdruck

echo is_callable(function () {
    echo 'hallo welt', PHP_EOL;
}), PHP_EOL;

// Kann ein Funktionsliteral auch mittels echo ausgegeben werden

/* echo function () {
    echo 'hallo welt', PHP_EOL;
}, PHP_EOL; // => PHP Fatal error:  Uncaught Error: Object of class Closure could not be converted to string in ...
 */

# Immediate Functions - sich selbst aufrufende 'Funktion'

(function () {
    echo 'hallo welt', PHP_EOL;
})();

## Funktionsliteral als Wert einer Variablen zuweisen => Funktionsausdruck

$var = function () {
    echo 'hallo welt', PHP_EOL;
};

var_dump($var);

echo gettype($var), PHP_EOL;
echo is_object($var), PHP_EOL;
echo is_callable($var), PHP_EOL;

// ausführen wie bei immediate functions

($var)();

// => spezielle Form in PHP: variablen Funktionen

$var();

## PHP unterstützt das Konzept der Variablenfunktionen. Wenn Sie an das Ende einer Variablen Klammern hängen, versucht PHP eine Funktion aufzurufen, deren Name der aktuelle Wert der Variablen ist.

$myVar = 'phpinfo';

// Aufruf als Variablenfunktion

$myVar();

// eigenen Funktionen als Variablenfunktion aufrufen

function multiply($number1, $number2)
{
    return $number1 * $number2;
}

echo multiply(3, 4), PHP_EOL;

$myVar = 'multiply';

var_dump($myVar(5, 7));

/* Vorstellung: eine Funktionsdefinition ist im 'Prinzip' wie ein Funktionsliteral aber mit einem Namen (eindeutigen Bezeichner)
Name: 'multiply'
Funktionsliteral: function ($number1, $number2)
{
    return $number1 * $number2;
}
 */

# andere Möglichkeit Funktionsliterale, sprich anonyme Funktionen aufzurufen

call_user_func(function () {
    echo 'hallo welt', PHP_EOL;
});

call_user_func($var);

$myFunction = function ($number1, $number2) {
    return $number1 ** $number2;
};

echo call_user_func($myFunction, 4, 2), PHP_EOL;

// Beispiel Funktion multiply aufrufen

$myVar = 'multiply';

echo call_user_func($myVar, 6, 7), PHP_EOL;

# Konzept callback-Funktionen

echo call_user_func('multiply', 5, 6);



