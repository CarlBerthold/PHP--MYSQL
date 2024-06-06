<?php

class Konto
{
    public $glaeubiger = '';
    public $kontonummer = '';
    public $guthaben = 0;
    public $waehrung = 'Euro';

    // function holeHallo() - kein guter Stil - Methoden sollten immer mit einer Sichtbarkeit versehen werden - ist diese nicht angegeben, ist die Methode immer Public
    public function holeHallo()
    {
        return 'Hallo Welt';
    }
}

# Instanz der Klasse erzeugen

$sparbuch = new Konto();

var_dump($sparbuch);

// Methode aufrufen

echo $sparbuch->holeHallo(), PHP_EOL;

# Methoden sind an Klassen gebundene Funktionen - diese sind auch nur im Kontext der Klasse bzw. des Objektes aufrufbar

// echo holeHallo(); // => Fatal error: Uncaught Error: Call to undefined function holeHallo() in 