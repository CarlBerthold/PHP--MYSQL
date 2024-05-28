<?php

// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

# sort-Funktion bei gemischente Datentypen mit Flags - SORT_NATURAL

// zum Testen

// $files = ['bild2.jpg', '0', 'bild10.jpg', '-5', 'Bild4.jpg', 'bild1.jpg', '3', '1'];
// $files = ['bild2.jpg', 0, '0', -5, 'bild10.jpg', '-5', 'Bild4.jpg', 1, 'bild1.jpg', '3', '1', 3];
$files = ['bild2.jpg', 0, 13 => NULL, '0', -5, 'bild10.jpg', true, '-5', 'Bild4.jpg', 1, 'bild1.jpg', false, '3', '1', 3];

sort($files, SORT_NATURAL | SORT_FLAG_CASE);

var_dump($files);