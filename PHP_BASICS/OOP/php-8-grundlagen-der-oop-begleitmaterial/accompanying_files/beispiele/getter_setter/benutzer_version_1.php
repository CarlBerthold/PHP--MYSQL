<?php

class Benutzer
{
    public $name = '';
    public $passwort = '';
    public $gruppen = [];

    function getPasswort()
    {
        return $this->passwort;
    }
}

$administrator = new Benutzer();
$administrator->passwort = 'geheim';

echo $administrator->getPasswort(); //gibt 'geheim' aus
