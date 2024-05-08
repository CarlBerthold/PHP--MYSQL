<?php

# Gültigkeitsbereich von Variablen

function sayHello()
{
    // Superglobale Variable $GLOBALS
    var_dump($GLOBALS);
    var_dump($GLOBALS['name']);
    $name = $GLOBALS['name']; // ganzganz schlechter Stil - nie machen!!!

    echo 'in der Funktion sayHello(): ' . $name, PHP_EOL;
}


$name = 'Oli';
sayHello();

// echo $name, PHP_EOL;


