<?php

class Benutzer
{
    public $name = '';
    public $passwort = '';
    public $gruppen = ['gaeste'];

    public function holeGruppen()
    {
        return $this->gruppen;
    }
}

$remolt = new Benutzer();
var_dump($remolt->holeGruppen());
