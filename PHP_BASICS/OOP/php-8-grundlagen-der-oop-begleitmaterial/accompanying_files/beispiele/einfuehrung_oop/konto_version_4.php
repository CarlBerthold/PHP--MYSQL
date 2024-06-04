<?php

class Konto
{
    public $glaeubiger = '';
    public $kontoNummer = '';
    public $guthaben = 0;
    public $waehrung = 'Euro';

    function holeHallo()
    {
        return 'Hallo Welt';
    }
}

$sparbuch = new Konto();

echo holeHallo(); //Fehler, da die Funktion nicht gefunden wird
