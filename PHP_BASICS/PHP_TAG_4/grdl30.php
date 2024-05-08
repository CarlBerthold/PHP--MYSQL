<?php


// ein string ist eine 0-indizierte Zeichenkette
$text = 'Hallo Welt, heut is ein schöner Tag!';


// gibt einen integer zurück
// gibt false zurück, wenn der string nicht gefunden wurde
var_dump(strpos($text, '')) . PHP_EOL;
var_dump(strpos($text, '?')) . PHP_EOL;


var_dump(strpos($text, 'Welt')) . PHP_EOL;


var_dump(strpos($text, 'Tag')) . PHP_EOL;

echo $text[0], PHP_EOL;
