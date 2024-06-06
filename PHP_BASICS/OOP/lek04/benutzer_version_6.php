<?php

class Benutzer
{
    public $name = '';
    protected $passwort = 'geheim';
    public $gruppen = [];

    public function getPasswort()
    {
        return password_hash($this->passwort, PASSWORD_DEFAULT);
    }
}

$administrator = new Benutzer();

// echo $administrator->passwort; // => PHP Fatal error:  Uncaught Error: Cannot access protected property Benutzer::$passwort in ...
echo $administrator->getPasswort(); // => funktioniert

# Sichtbarkeitsschutz bei schreibendem Zugriff

// $administrator->passwort = 'Pa$$w0rd'; // => Fatal error: Uncaught Error: Cannot access protected property Benutzer::$passwort in ...

# Password-Hash erzeugen

$password = 'ganzgeheim';

$hash = password_hash($password, PASSWORD_DEFAULT); // z. B. Speichern in der DB

var_dump($hash);

// Loginprozess - Vergleich des eingegebenen Password mit dem 'gespeicherten'
$post = [];
$post['password'] = 'ganzGeheim';

if(password_verify($post['password'], $hash)) {
    echo 'Du bist eingeloggt!';
} else {
    echo 'Password ist nicht korrekt!';
}




