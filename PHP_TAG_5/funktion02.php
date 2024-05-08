<?php

# Was passiert, wenn eine Funktion aufgerufen wird, bevor sie definiert wurde?

sayHello();
sayHello();
sayHello();
sayHello();

function sayHello()
{
    echo 'hello world', PHP_EOL;
}


# ähnlich wie in JavaScript - 'Hoisting', bedeutet das Funktionsdefinitionen hochgezogen werden

# in PHP: wird ja zunächst das Script geparst
# und danach wird das Script an den Interpreter übergeben und 'compiliert' (in Maschinen-Code übersetzt)
# -> genau zu dem Zeitpunkt werden Funktionsdefinition eingelesen und die Funktionen für die weitere Ausführung bereitgestellt (man spricht von der 'Compilierzeit') => danach startet erst die eigentliche Ausführung des Scriptes (man spricht von der 'Laufzeit')