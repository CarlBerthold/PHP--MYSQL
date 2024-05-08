<?php

function myPow($base, $exponent)
{
    $result = $base ** $exponent;
    return $result;
    // nach einem return wird der Funktionsaufruf instantan beendet und kein weiterer Code in der Funktion danach ausgeführt
    echo 'hallo Welt', PHP_EOL;
}

echo myPow(2, 8);

// Funktionsaufruf innerhalb eines Ausdrucks
$value = myPow(3, 9) + 25;

var_dump($value);

## Können Funktionen mehrere Werte zurückgeben?

function tueWas($value1, $value2)
{
    $sum = $value1 + $value2;
    $sub = $value1 - $value2;
    $mult = $value1 * $value2;

    // alle 3 Werte zurückgeben lassen
    // return $sum, $sub, $mult; // => Parse error: syntax error, unexpected token ",", expecting ";" in ...
    return $sum;
    return $sub; // wird nicht zurückgegeben, da das return davor den Funktionsaufruf beendet
    return $mult;
}


var_dump(tueWas(5, 7));


# Fazit: mittels return kann nur eine Wert zurückgegeben werden. Sollen mehrere Werte aus der Funktion zurückgegeben werden, muss ein anderer Datentyp - ein nicht skalarer - wie z. B. ein Array oder ein Objekt verwendet werden