<?php

# Gültigkeitsbereich von Variablen

function sayHello()
{
    global $name; // ganzganz schlechter Stil - nie machen!!!
    var_dump($name);
    echo 'in der Funktion sayHello(): ' . $name, PHP_EOL;

    ## Was passiert, wenn ich in der Funktion jetzt den Wert der Variablen ändere?
    $name = 'Kurt';
}


sayHello();
// $name = 'Oli';

echo $name, PHP_EOL;


