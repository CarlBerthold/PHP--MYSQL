<?php

# for-Schleife

## die Zahlen von 1 bis 10 ausgeben lassen

for($i = 1; $i <= 10; $i = $i + 1) {
    echo $i, PHP_EOL;
}

## alternativ

for($number = 1; $number < 11; $number++) {
    echo $number, PHP_EOL;
}

// Frage: gibt es einen Unterschied zw. dem Post- und Prä-Inkrement-Operator in einem for-Loop?

for($number = 1; $number < 11; ++$number) {
    echo $number, PHP_EOL;
}

## die Zahlen von 20 nach 10 rückwärst ausgeben

for ($back = 20; $back >= 10; --$back) {
    echo $back, PHP_EOL;
}

## nur die geraden Zahlen von 1 bis 20 ausgeben

for ($i = 1; $i <= 20; $i++) {
    if($i % 2 === 0) {
        echo $i, PHP_EOL;
    }
}

### andere Lösung

for ($i = 2; $i <= 20; $i += 2) {
    echo $i, PHP_EOL;
}

### noch eine andere Lösung

for ($i = 1; $i <= 10; $i++) {
    echo $i * 2, PHP_EOL;
}

### noch eine

for ($i = 1; $i <= 20 && $i % 2 === 0; $i++) { // geht nicht, da sobald die Schleifenbedingung nach false evaluiert das gesamte Schleifenkonstrukt verlassen wird
        echo $i, PHP_EOL;
}

### ändern der Schleifenvariablen (Zählvariablen) im Schleifenkörper

for ($i = 1; $i <= 20; $i++) {
    if($i % 2 === 0) {
        echo $i, PHP_EOL;
        $i++;
    }
}

## die Zahlen von 1 bis 6 und von 10 bis 16 ausgeben

for ($i = 1; $i < 17; $i++) {
    echo $i, PHP_EOL;
    if ($i == 6) $i = 9;
}

## Schleife ohne (gültige) Abbruchbedingung

/* for ($i = 0; $i >= 0; $i++) {
    echo $i, PHP_EOL;
}  */

// => Endlosschleife

## Schlüsselwort continue

for ($i = 1; $i < 21; $i++) {
    if ($i % 2 !== 0) continue;
    echo $i, PHP_EOL;
}

## Schlüsselwort break

$break = 13;

for ($i = 0; $i <= 100; $i += 3) {
    echo $i, PHP_EOL;
    if ($i >= $break) break;
}

## verschachtelte Schleifen

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . $j, PHP_EOL;
    }
}

// was passiert mit der/den Schleifenvariablen, wenn die Schleife beendet ist?

var_dump($i, $j);

