## switch-Anweisung ## 
- Schreibe ein PHP-Script, dass in Abhängigkeit des Werts einer Variablen $month die Anzahl der Tage eines
Monats ausgibt. Wird ein unbekannter Monat eingegeben, soll ein entsprechender Hinweis ausgegeben
werden (z. B. "Dieser Monat ist mir nicht bekannt"). Schaltjahre sollen nicht berücksichtigt werden!
# Teilaufgabe 1 #
- Als mögliche Werte für $month soll der Monatsname in Deutsch eingegeben werden können, also z. B.
'Januar'.
# Teilaufgabe 2 # 
- Optimieren den Lösungsansatz so, dass möglichst wenig Code wiederholt wird (DRY-Prinzip).
# Teilaufgabe 3 #
- Als Erweiterung sollen neben dem Monatsnamen auch die Abkürzung nach DIN ('Jan.', 'Feb.', 'Mrz.', 'Apr.',
'Mai', 'Jun.', 'Jul.', 'Aug.', 'Sep.', 'Okt.', 'Nov.', 'Dez.') oder die Zahlenwerte von 1 bis 12 für $month möglich sein.
# Teilaufgabe 4 # 
- Schreibe deinen Code so um, das anstelle der switch-Anweisung die match-Expression für die Ausgabe der
Tage verwendet wird.
# Teilaufgabe 5 # 
- Lagere wahlweise die Lösung mit der switch-Anweisung oder mit der match-Expression in eine Funktion aus.
Die Funktion könnte getDaysInMonth heißen und sollte die Anzahl der Tage pro Monat zurückgeben.