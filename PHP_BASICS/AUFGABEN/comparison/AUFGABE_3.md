## Aufgabe 3 ##
Funktionen und Bedingungen
Mit PHP 8 wurde 

eine neue Funktion str_starts_with eingeführt. Diese war in früheren Version noch nicht
vorhanden, soll aber hierfür also z. B. für PHP 7.4 verfügbar gemacht werden.

- Schreibe eine eigene Funktion namens my_str_starts_with, die wie die PHP-interne Funktion
str_starts_with prüft, ob ein String mit einer bestimmten Zeichenkette beginnt.
Die Funktion soll den Bool-Wert TRUE zurückgeben, wenn der String mit der Zeichenkette beginnt.
Anderenfalls soll FALSE zurückgeben werden.

Funktionssignatur:
``` php
my_str_starts_with(string $haystack, string $needle) : bool

Beispiele Funktionsaufruf:
var_dump(my_str_starts_with('Hallo Welt', 'Hal')); // => bool(true)
var_dump(my_str_starts_with('Hallo Welt', 'Welt')); // => bool(false)
```

Löse die Aufgaben, indem Du im Handbuch (php.net) nach geeigneten Funktionen zur Stringbearbeitung
suchst. Diese müssen aber in der früheren PHP Version auch verfügbar sein.
Hinweis: achte auf die Rückgabewerte der Funktionen, insbesondere wenn diese bei impliziter
Typumwandlung möglicherweise (ungünstig) umgewandelt werden könnten.

## LÖSUNG ##
[lösung](AUFGABE_3.php)