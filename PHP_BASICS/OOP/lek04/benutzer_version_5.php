<?php

class Benutzer
{
    public $name = '';
    protected $passwort = 'geheim';
    public $gruppen = [];

    public function getPasswort()
    {
        return $this->passwort;
    }
}

$administrator = new Benutzer();

// echo $administrator->passwort; // => PHP Fatal error:  Uncaught Error: Cannot access protected property Benutzer::$passwort in ...
echo $administrator->getPasswort(); // => funktioniert

# Sichtbarkeitsschutz bei schreibendem Zugriff

// $administrator->passwort = 'Pa$$w0rd'; // => Fatal error: Uncaught Error: Cannot access protected property Benutzer::$passwort in ...
