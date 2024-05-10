## Aufgabe 4 ##
Teilaufgabe a:
- Schreibe eine eigene Funktion namens compareNumbers, die zwei Zahlen miteinander vergleichen soll und als
Ergbenis für den Fall
$number1 >= $number2 → 'Zahl 1 ist größer oder gleich Zahl 2'und für den Fall
$number1 < $number2 → 'Zahl 1 ist kleiner als Zahl 2 zurückgibt.

Funktionssignatur:
``` php
compareNumbers(int|float $number1, int|float $number2) : string
Beispiele Funktionsaufruf:
var_dump(compareNumbers(3, 4)); // => 'Zahl 1 ist kleiner als Zahl 2'
var_dump(compareNumbers(4, 4)); // => 'Zahl 1 ist größer oder gleich Zahl 2'
var_dump(compareNumbers(5, 4)); // => 'Zahl 1 ist größer oder gleich Zahl 2'
``` 
Anmerkung: da wir die Typdeklartion von Parametern und den Returntype noch nicht behandelt haben,
sollte die Lösung diese auch nicht verwenden.

- Teilaufgabe b:
Prüfe in der Funktion, ob es sich bei den übergebenen Werte für die Parameter um korrekte Zahlenwerte
handelt. D. h. der Vergleich soll nur durchgeführt werden, wenn entweder Ganzahlen (Integer),
Fließkommazahlen (Floats) und/oder rein numerische Strings, die ausschließlich aus Ganzahlen und/oder
Fließkommazahlen bestehen, für beide Parameter übergeben wurden.

Wird für eines der Argumente oder auch für beide ein Wert übergeben, der nicht den obigen Kriterien
entspricht (also z. B. ein falscher Datentyp wie NULL, Boolean o. ä. oder ein nicht rein numerischer String) soll
die Funktion eine Fehlerhinweis wie z. B. "Bitte nur Zahlenwerte eingeben" zurückgeben.
Funktionssignatur für Teilaufgabe b:
```php
compareNumbers(int|float|string $number1, int|float|string $number2) : string
```

## LÖSUNG ##
[lösung](AUFGABE_4.php)