<?php
// fügt bei Ausgabe im Browser ein <pre>-Tag hinzu
if (isset($_SERVER['HTTP_USER_AGENT'])) echo "<pre>\n";

# sort-Funktion bei Strings

$programmiersprachen = ['PHP', 'JavaScript', 'Ruby', 'perl'];

sort($programmiersprachen);

var_dump($programmiersprachen);