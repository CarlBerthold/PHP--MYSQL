<?php

error_reporting(0); // Fehlerausgabe ausschalten

// Prüffunktion is_null()

$var1 = NULL;

echo is_null($var1), PHP_EOL; // => 1

$var2 = 'oli';
echo is_null($var2), PHP_EOL; // => ''

// => ein echo bei bool-Werten ist ungünstig
var_dump(is_null($var1), is_null($var2));

// Variable nur deklarieren oder gar nicht deklarieren

$var2;
echo is_null($var2), PHP_EOL;
echo is_null($var3), PHP_EOL;

// Variable mittels unset() zurückgesetzt

$var4 = 'oli';

// ganz viel Code bei dem mit $var4 gearbeitet wird

unset($var4);
echo is_null($var4), PHP_EOL;