<?php

$myFunction1 = function ($name) {
    echo "Hallo $name", PHP_EOL;
};

# Variablen-Funktion

$myFunction1('Oli');

$myFunction2 = function ($name) {
    return strtoupper($name);
};

echo $myFunction2('oli'), PHP_EOL;


# PHP arrow-Function

## wenn eine anonyme Funktion nur ein Returnstatement besitzt (also keine weiteren Anweisungen) kann diese in eine arrow-Function umgewandelt werden

$myFunction3 = fn ($name) => strtoupper($name);

echo $myFunction3('klein'), PHP_EOL;