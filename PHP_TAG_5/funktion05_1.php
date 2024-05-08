<?php

# Gültigkeitsbereich von Variablen

function sayHello()
{
    $name = 'Oli';
    echo 'in der Funktion sayHello(): ' . $name, PHP_EOL; // => PHP Warning:  Undefined variable $name ...
}

sayHello();

## Wie sieht es mit einem Zugriff auf eine Variable aus, die in einer Funktion definiert wurde?

echo $name, PHP_EOL; // => PHP Warning:  Undefined variable $name in ...

# Fazit: Variablen haben keinen globalen Scope, d. h. Variablen sind nur dort gültig wo sie definiert wurden!

## Was passiert, wenn ich die Funktion noch mal aufrufe? Bekomme ich einen Fehler Redeclaration der Variablen?

sayHello();

// Die Frage erklärt sich eigentlich von selbst!

