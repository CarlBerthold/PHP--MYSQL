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

// echo $administrator->passwort; // => PHP Fatal error:  Uncaught Error: Cannot access protected property Benutzer::$passwort in ...
echo $administrator->getPasswort(); //das funktioniert
