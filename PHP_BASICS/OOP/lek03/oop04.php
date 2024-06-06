<?php

$sparbuch1 = new stdClass();
$sparbuch2 = new stdClass();

// Sind die beiden Variablen 'wertegleich'?

if($sparbuch1 == $sparbuch2) {
    echo 'die beiden Variablen sind gleich (wertegleich)', PHP_EOL;
} else {
    echo 'die beiden Variablen sind nicht gleich (werteungleich)', PHP_EOL;
}

// Sind die beiden Variablen identisch?

if($sparbuch1 === $sparbuch2) {
    echo 'die beiden Variablen sind identisch', PHP_EOL;
} else {
    echo 'die beiden Variablen sind nicht identisch', PHP_EOL;
}

// Was passiert, wenn ich eine Kopie von einem Objekt erzeugen

$sparbuch3 = $sparbuch1;

if($sparbuch3 == $sparbuch1) {
    echo 'die beiden Variablen sind gleich (wertegleich)', PHP_EOL;
} else {
    echo 'die beiden Variablen sind nicht gleich (werteungleich)', PHP_EOL;
}

if($sparbuch3 === $sparbuch1) {
    echo 'die beiden Variablen sind identisch', PHP_EOL;
} else {
    echo 'die beiden Variablen sind nicht identisch', PHP_EOL;
}

// => ein Objekt kann nicht geklont werden, d. h. es kann keine Kopie eines Objektes erzeugt werden

# Konsequenz: eine Variable, der wir ein Objekt zuweisen, referenziert den Wert lediglich - vlg. Referenzzuweisung

$a = 3;
$b = &$a;


