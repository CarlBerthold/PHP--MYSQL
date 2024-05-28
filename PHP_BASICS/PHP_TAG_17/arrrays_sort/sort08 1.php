<?php

// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

# weitere sort-Funktionen 

/**
 * asort — Sortiert ein Array in aufsteigender Reihenfolge und behält die Indexzuordnung bei 
 * 
 *  asort(array &$array, int $flags = SORT_REGULAR): bool
 * 
 * https://www.php.net/manual/de/function.asort.php
 * 
 */

/**
 * arsort — Sortiert ein Array in absteigender Reihenfolge und behält die Indexzuordnung bei 
 * 
 *  arsort(array &$array, int $flags = SORT_REGULAR): bool
 * 
 * https://www.php.net/manual/de/function.arsort.php
 * 
 */

/**
 * rsort — Sortiert ein Array in absteigender Reihenfolge
 * 
 *  rsort(array &$array, int $flags = SORT_REGULAR): bool
 * 
 * https://www.php.net/manual/de/function.rsort.php
 * 
 */

# sort-Funktionen bei genummerten Strings

$files = [
    'item1' => 'bild2.jpg', 
    'item2' => 'bild10.jpg', 
    'item3' => 'Bild4.jpg', 
    'item4' => 'bild1.jpg'
];

arsort($files, SORT_NATURAL | SORT_FLAG_CASE);
// asort($files); # Indexzuordnung bleibt erhalten
// arsort($files); # absteigend und Indexzuordnung bleibt erhalten
// rsort($files); # absteigend

var_dump($files);

# sort-Funktionen bei numerischen Werten

$numbers = [1 => 2.5, 3 => 1.5, 5 => 3.75, 9 => 1.25];

sort($numbers);
// asort($numbers); # Indexzuordnung bleibt erhalten, auch bei numerischen Keys
// arsort($numbers);
// rsort($numbers);

var_dump($numbers);