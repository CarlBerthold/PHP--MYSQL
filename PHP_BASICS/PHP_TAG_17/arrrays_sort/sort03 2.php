<?php
// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

# sort-Funktion bei genummerten Strings

$files = [
    'bild25.png',
    'Bild2.jpg',
    'bild10.jpg',
    'bild3.jpg',
    'BILD6.JPG',
    'bild1.jpg',
];

sort($files);

var_dump($files);