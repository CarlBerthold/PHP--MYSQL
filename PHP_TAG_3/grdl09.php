<?php

# Datentyp NULL

$var1 = NULL;
$var1 = null;
echo gettype($var1), PHP_EOL;

// Variable nur deklarieren oder gar nicht deklarieren

$var2;
echo gettype($var2), PHP_EOL;
echo gettype($var3), PHP_EOL;

// Variable mittels unset() zurückgesetzt

$var4 = 'oli';

// ganz viel Code bei dem mit $var4 gearbeitet wird

unset($var4);
echo gettype($var4), PHP_EOL;


// Besonderheit von unset() - ist eine Variable nicht deklariert, wird keine Warning ausgegeben

unset($michGibtEsNicht);