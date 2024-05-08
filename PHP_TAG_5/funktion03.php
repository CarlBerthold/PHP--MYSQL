<?php

# Funktion in einer Funktion aufrufen

function sayHello()
{
    echo 'hello world', PHP_EOL;
}

function sayHelloToOli()
{
    sayHello();
    echo 'Hallo Oli', PHP_EOL;
}

sayHello();
sayHelloToOli();

# Ergebnis:
// Funktion können auch aus andern Funktionen heraus aufgerufen werden
// die Reihenfolge der Funktionsdefinitionen spielt keine Rolle, diese werden vor Ausführung des Code eingelesen ('Hoisting')

## => Funktion in PHP haben einen globalen Scope - Gültigkeitsbereich