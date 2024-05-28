<?php
// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

# sort-Funktion bei genummerten Strings mit Flags - SORT_STRING

$files = [
    'bild10.jpg',
    'BILD6.JPG',
    'bild25.png',
    'bild1.jpg',
    'bild3.jpg',
    'Bild2.jpg',
];

sort($files, SORT_STRING | SORT_FLAG_CASE);

var_dump($files);