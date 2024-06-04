<?php

class Konto
{
    public $glaeubiger;
    public $kontoNummer;
    public $guthaben;
    public $waehrung = 'Euro';
}

$sparbuch = new Konto();
echo $sparbuch->waehrung; //gibt 'Euro' aus
