<?php

# Aufgabe: eine Funktion die den höchsten Index eines numerisch indizierten Arrays ermittelt

function arrayMaxIndex(array $array) : int
{
    // wenn das Array eine Liste ist, d. h. lückenlos indiziert, können wir den höchsten Index einfach ermitteln
    if (array_is_list($array)) {
        return count($array) - 1;
    }
    $indices = array_keys($array);
    // return max($indices);
    return myMax($indices);
}

// eigene max-Funktion - myMax (nur für numerische Wert)

function myMax(array $array) : mixed
{
    // es muss sichergestellt sein, dass das Array ein Liste ist
    if (!array_is_list($array)) {
        $array = array_values($array);
    }
    $max = 0; // 2do - testen ob es auch negative indexe gibt
    for($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    return $max;
}

$array = [1, 3, 4,];

print_r($array);

echo arrayMaxIndex($array), PHP_EOL;

// Elemente hinzufügen

$array[10] = 10;
$array[] = 11;
$array[5] = 5;

echo arrayMaxIndex($array), PHP_EOL;