<?php

class Benutzer
{
    public $name = '';
    public $passwort = '';
    public $gruppen = ['gaeste'];

    function holeGruppen()
    {
        return $this->gruppen;
    }
}

$remolt = new Benutzer();
var_dump($remolt->holeGruppen());
