<?php

class Benutzer
{
    public $name = '';
    public $passwort = '';
    public $gruppen = ['gaeste'];

    public function holeGruppen()
    {
        return $remolt->gruppen; // => Warning: Undefined variable $remolt in ...
    }
}

$remolt = new Benutzer();
var_dump($remolt->holeGruppen());
