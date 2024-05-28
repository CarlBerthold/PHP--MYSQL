<?php

error_reporting(0);

# Funktion strftime - ab PHP 8.1. deprecated

// Ausgabe Datum wie in Briefen

echo strftime('%A, der %d %B %Y'), PHP_EOL;

setlocale(LC_TIME, "de-DE");
// setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');

echo strftime('%A, der %d %B %Y'), PHP_EOL;