<?php

# Funktion date

## Aufgabe: Ausgabe eines Timestamps im ISO-Format für MySQL

$xmas = strtotime('24.12.2024 17:30');

echo $xmas, PHP_EOL;

// Format YYYY-MM-DD hh:mm:ss

$isoDateTimeString = date('Y-m-d H:i:s', $xmas);

echo $isoDateTimeString, PHP_EOL;

// direkt als ISO 6801-String formatieren
$isoDateTimeString = date('c', $xmas);

echo $isoDateTimeString, PHP_EOL;

// Was haben wir heute für einen Tag

echo date('D'), PHP_EOL;

// An was für einem Tag ist Weihnachten

echo date('l', $xmas), PHP_EOL;