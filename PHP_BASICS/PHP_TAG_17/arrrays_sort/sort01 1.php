<?php
// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

/**
 * sort — Sortiert ein Array in aufsteigender Reihenfolge
 * 
 *  sort(array &$array, int $flags = SORT_REGULAR): bool
 * 
 * https://www.php.net/manual/de/function.sort.php
 * 
 */


# sort-Funktion bei numerischen Werten

$numbers = [1 => 2.5, 3 => 1.5, 5 => 3.75, 9 => 1.25];

sort($numbers);

var_dump($numbers);