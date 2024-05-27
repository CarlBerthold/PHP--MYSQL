<?php

var_dump(file_get_contents('text.txt'));

$content = file_get_contents('text.txt');

echo $content, PHP_EOL;

// Was passiert, wenn eine Datei nicht existiert?

$content = file_get_contents('meinetext.txt'); // => Warning: file_get_contents(meinetext.txt): Failed to open stream: No such file or directory in ...

echo $content, PHP_EOL;

echo 'hallo Welt';

// Wie kann man prüfen, ob eine Datei existiert?

if(file_exists('meinetext.txt')) {
    $content = file_get_contents('meinetext.txt');
} else {
    $content = 'Datei existiert nicht!!!';
}

echo $content, PHP_EOL;