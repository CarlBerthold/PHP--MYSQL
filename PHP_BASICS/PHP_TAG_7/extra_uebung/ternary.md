## if-else-Anweisung, ternärer Operator und boolsche Ausdrücke ## 
- Schreibe eine Funktion, die prüft, ob eine Ganzzahl gerade ist. Die Funktion soll TRUE zurückgeben, wenn die
Zahl gerade ist, ansonsten FALSE.
``` php
is_even(int $number) : bool
```


# Teilaufgabe 1 #
- Löse die Aufgabe zunächst mittels einer if-else-Anweisung.
# Teilaufgabe 2 # 
- Wandle nun die if-else-Anweisung in einen ternären Operator um.
# Teilaufgabe 3 # 
- Überlege, ob sich der Ausdruck noch weiter vereinfachen lässt (Tipp: was gibt der ternäre Operator von
Teilaufgabe 2 zurück)
# Teilaufgabe 4 # 
- Schreibe nun eine Funktion is_odd, die analog is_even prüft, ob eine Ganzzahl ungerade ist.
Die Funktion selbst soll jedoch keine eigene Logik implementiert haben, sondern das Ergebnis der Funktion
is_even nutzen.
# Teilaufgabe 5 # 
- Stelle mittels Typdeklaration sicher, dass ausschließlich Ganzzahlen als Argumente bei den Funktionsaufrufen
übergeben werden dürfen. (Wird keine Ganzzahl übergeben, soll PHP einen Fatal Error werfen.)

[LÖSUNG](ternary.php)