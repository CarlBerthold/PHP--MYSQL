<?php

# eigene higher-order-Funktion schreiben
## aus Wiki: Eine Funktion höherer Ordnung (englisch higher-order function) ist in der Informatik eine Funktion, die Funktionen als Argumente erhält und/oder Funktionen als Ergebnis liefert. 
## https://de.wikipedia.org/wiki/Funktion_h%C3%B6herer_Ordnung

function calculate($callback, $number1, $number2)
{
    // Aufruf der $callback mittels der PHP call_user_func
    $result = call_user_func($callback, $number1, $number2);

    // Aufruf der $callback als Variablen-Funktion
    $result = $callback($number1, $number2);

    return $result;
}

# beliebige Funktionsdefinionen für die Callbacks

function divide($number1, $number2)
{
    return $number1 / $number2;
}

function modulo($value1, $value2)
{
    return $value1 % $value2;
}

echo divide(17, 4), PHP_EOL;

# Beispiel: divide als Argument der calculate-Funktion übergeben - also als Callback-Funktion

echo calculate('divide', 19, 8), PHP_EOL;

# Beispiel: PHP pow-Funktion als Callback

echo calculate('pow', 2, 8), PHP_EOL;

echo calculate('modulo', 143, 25), PHP_EOL;

## Beispiel: anonyme Funktion anstelle einer Callback-Funktion übergeben

echo calculate(function ($par1, $par2) {
    for($i = 1; $i <= $par2; $i++) {
        $par1 += $par1;
    }
    return $par2;
}, 2, 9), PHP_EOL;

