<?php

# Unix-Timestamp des System - Sekunden die seit dem 01.01.1970 vergangen sind

echo time(), PHP_EOL;

## Funktion strtotime

echo strtotime('now'), PHP_EOL;
echo strtotime('28 May 2024'), PHP_EOL;
echo strtotime('28 Mai 2024'), PHP_EOL;
echo strtotime('+1 day'), PHP_EOL;
echo strtotime('+1 week'), PHP_EOL;
echo strtotime('+1 week 2 days 4 hours 30 seconds'), PHP_EOL;
echo strtotime('-1 week 2 days 4 hours 30 seconds'), PHP_EOL;
echo strtotime('-1 week'), PHP_EOL;
echo strtotime('1 week'), PHP_EOL;
echo strtotime('1 week -1 day'), PHP_EOL;
echo strtotime('last friday'), PHP_EOL;
echo strtotime('28.05.2024 12:00'), PHP_EOL;

## Funktion mktime

echo mktime(12, 00, 00, 5, 28, 2024), PHP_EOL;

// Beispiel wann ist Mittagspause

echo (mktime(12, 00, 00, 5, 28, 2024) - time()) / 60, PHP_EOL;

