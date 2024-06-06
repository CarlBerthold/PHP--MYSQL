<?php

class Konto
{
    // $glaeubiger; // => Parse error: syntax error, unexpected variable "$glaeubiger", expecting "function" or "const" in ...
    public $glaeubiger;
    public $kontonummer;
    public $guthaben;
    public $waehrung;
}

$sparbuch = new Konto();

var_dump($sparbuch);