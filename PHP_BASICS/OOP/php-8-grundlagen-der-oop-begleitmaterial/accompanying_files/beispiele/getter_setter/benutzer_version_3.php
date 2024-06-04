<?php

class Benutzer
{
    public $name = '';
    public $passwort = '';
    public $gruppen = [];

    function getPasswort()
    {
        return '';
    }
}

$administrator = new Benutzer();
$administrator->passwort = 'geheim';

echo $administrator->passwort; //gibt weiterhin 'geheim' aus
