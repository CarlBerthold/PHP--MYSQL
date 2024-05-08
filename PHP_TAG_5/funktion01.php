<?php

# Funktionsdefinition

## beginnt immer mit dem Schlüsselwort 'function'
## gefolgt vom Funktionsbezeichner (muss den Regeln für Bezeichner in PHP entsprechen)
## gefolgt von einer Parameterliste in runden Klammern (wobei auch keine Parameter definiert sein können)
## gefolgt vom Funktionskörper

function sayHello() // einfachste Form eines Funktionskopf
{
    echo 'hello world', PHP_EOL;
}

# Funktionsaufruf

sayHello();

// Wiederverwertbarkeit von Funktionen

sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

## Was passiert, wenn ich eine Funktion aufrufe, die nicht definiert ist?

// sagHallo(); // => Fatal error: Uncaught Error: Call to undefined function sagHallo() in ...

## Was passiert, wenn ich eine Funktion definiere, die bereits existiert?
/* 
function sayHello() // => Fatal error: Cannot redeclare sayHello() (previously declared in 
{
    echo 'hallo Welt', PHP_EOL;
}
*/

// gilt nicht nur für selbstgeschreiben Funktionen, sondern auch für die PHP-interne
/* 
function var_dump() // => PHP Fatal error:  Cannot redeclare var_dump() in ...
{
    echo 'meine eigene var_dump()', PHP_EOL;
}
 */