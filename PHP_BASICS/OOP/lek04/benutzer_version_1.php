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
$administrator->passwort = 'Pa$$w0rd';  // so nie machen, nie in Klartext

echo $administrator->getPasswort(); //gibt 'Pa$$w0rd' aus
