<?php

# Gültigkeitsbereich von Variablen

$name = 'Oli';

echo $name, PHP_EOL;

function sayHello()
{
    echo 'in der Funktion sayHello(): ' . $name, PHP_EOL; // => PHP Warning:  Undefined variable $name ...
}

sayHello();

// Variablen haben keinen globalen Scope, d. h. Variablen sind nur dort gültig wo sie definiert wurden!