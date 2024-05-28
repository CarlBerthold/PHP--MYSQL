<?php
// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

# sort-Funktion bei numerischen Strings mit Flags - SORT_STRING

$numbers = ['2', '10', '4', '1'];

sort($numbers);
sort($numbers, SORT_STRING);

var_dump($numbers);