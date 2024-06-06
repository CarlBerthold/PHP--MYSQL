<?php

class Konto
{
    public $glaeubiger = '';
    public $kontonummer = '';
    public $guthaben = 0;
    public $waehrung = 'Euro';
}

# Kontoeröffnung - Ändern der Initialwerte des Objektes

// $olisTagesgeldkonto = new Konto();
$olisGiroKonto = new Konto();

var_dump($olisGiroKonto);

$olisGiroKonto->glaeubiger = 'Oli';

$olisGiroKonto->kontonummer = '56547825852';

$olisGiroKonto->guthaben = 199;

$olisGiroKonto->waehrung = 'Dollar';

var_dump($olisGiroKonto);

# noch ein Konto anlegen

$olisTagesgeldkonto = new Konto();

var_dump($olisTagesgeldkonto);