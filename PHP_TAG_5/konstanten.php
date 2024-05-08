<?php

# Konstanten

## Konstanten definieren

define('NAME', 'Oli');

## mit Konstanten arbeiten

echo NAME, PHP_EOL;

## in Ausdrücken verwenden

$text = 'Hallo ' . NAME . '! Wie geht es Dir?';

echo $text, PHP_EOL;

## Konstanten in Strings mit doppelten Anführungszeichen - werden diese aufgelöst?

echo "Hallo NAME", PHP_EOL;
echo "Hallo {NAME}", PHP_EOL;

## Werte von Konstanten ändern?

// NAME = 'Hans'; // => Parse error: syntax error, unexpected token "=" in ...
define('NAME', 'Hans'); // => PHP Warning:  Constant NAME already defined in ...

echo NAME, PHP_EOL;

// Der Werte einer Konstanten kann zur Laufzeit nicht verändert werden!

## Scope von Konstanten

function doSomething()
{
    echo NAME, PHP_EOL;
}

doSomething();

// Konstanten haben einen globalen Scope - sind überall gültig

## Wie verhält es sich, wenn die Konstante innerhalb einer Funktion definiert wird?

function defineConstant($value)
{
    define('AGE', $value);
    echo 'in der Funktion: ' . AGE, PHP_EOL;
}

defineConstant(42);

// ist die Konstante eine lokale Konstante?
echo AGE, PHP_EOL;

// => Konstanten haben einen globalen Scope - sind überall gültig

// nochmaliges Aufrufen der Funktion
defineConstant(55); // Warning: Constant AGE already defined in ...


# Alternative Syntax

## Konstante definieren

const CITY = 'Dubai';

echo CITY, PHP_EOL;