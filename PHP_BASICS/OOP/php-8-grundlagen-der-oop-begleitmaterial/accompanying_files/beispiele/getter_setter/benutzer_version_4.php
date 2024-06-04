<?php

class Benutzer
{
    public $name = '';
    protected $passwort = 'geheim';
    public $gruppen = [];

    function getPasswort()
    {
        return '';
    }
}

$administrator = new Benutzer();

echo $administrator->passwort; //erzeugt einen Fehler
echo $administrator->getPasswort(); //das funktioniert
