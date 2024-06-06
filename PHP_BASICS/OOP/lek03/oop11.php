<?php

class Konto
{
    // $glaeubiger; // => Parse error: syntax error, unexpected variable "$glaeubiger", expecting "function" or "const" in ...
    public $glaeubiger;
    public $kontonummer;
    public $guthaben;
    public $waehrung = 'Euro';
}

$sparbuch = new Konto();

var_dump($sparbuch);

echo $sparbuch->waehrung, PHP_EOL;

// Was passiert, wenn wir das Dollarzeichen vor den Attributsbezeichner schreiben

// echo $sparbuch->$waehrung, PHP_EOL; // => PHP Warning:  Undefined variable $waehrung in ...
// PHP Warning:  Undefined property: Konto::$ in ...

// Was passiert, wenn es eine Variable $waehrung im globalen Kontext gäbe?

$waehrung = 'Dollar';
echo $sparbuch->$waehrung, PHP_EOL; // => PHP Warning:  Undefined property: Konto::$Dollar in ...

$waehrung = 'waehrung';
echo $sparbuch->$waehrung, PHP_EOL;

$var = 'glaeubiger';
echo $sparbuch->$var, PHP_EOL;

# Fazit: wenn nach dem Pfeiloperator ein Dollar mit einem Bezeichner geschrieben wird, versucht PHP den Wert einer entsprechenden Variablen als Bezeichner eines Attributs aufzulösen => vergleichbar variablen Variablen

