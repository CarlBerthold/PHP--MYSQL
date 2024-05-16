<?php

# while-Schleife

// Zahlen von 1 bis 10 ausgeben

$i = 1;

while ($i < 11) {
    echo $i, PHP_EOL;
    $i++;
}

// ungeraden Zahl von 1 bis 20 ausgeben

$i = 1;

while ($i <= 20) {
    echo $i, PHP_EOL;
    $i += 2;
}

// mit Modulo

$i = 1;

while ($i <= 20) {
    if ($i % 2 !== 0) echo $i, PHP_EOL;
    $i++;
}

## Schleife manuell abbrechen

// alle Zahlen die durch 3 teilbar sind von 1 bis 33

$i = 1;

while ($i <= 33) {
    if ($i % 3 === 0) echo $i, PHP_EOL;
    $i++;
}

// andere Formulierung

$i = 1;
$break = true;

while ($break) {
    if ($i % 3 === 0) echo $i, PHP_EOL;
    $i++;
    if ($i > 33) $break = false;
}

// mit dem Schlüsselwort break

$i = 1;

while (true) {
    if ($i % 3 === 0) echo $i, PHP_EOL;
    $i++;
    if ($i > 33) break;
}