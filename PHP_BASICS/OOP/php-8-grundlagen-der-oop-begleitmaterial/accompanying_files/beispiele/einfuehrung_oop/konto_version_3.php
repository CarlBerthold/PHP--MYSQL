<?php

class Konto
{
    public $glaeubiger = '';
    public $kontoNummer = '';
    public $guthaben = 0;
    public $waehrung = 'Euro';
}

$sparbuch = new Konto();

echo gettype($sparbuch->guthaben); //gibt 'integer' aus

echo $sparbuch->kontoNummer; //gibt '' aus

$sparbuch->glaeubiger = 'Jan Teriete';
echo $sparbuch->glaeubiger; //gibt 'Jan Teriete' aus
