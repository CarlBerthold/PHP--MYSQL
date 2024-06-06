<?php

class Person
{
    public $vorname = '';
    public $nachname = '';

    function getVorname()
    {
        return $this->vorname;
    }
}

$schad = new Person();
$schad->vorname = 'Frank';
$schad->nachname = 'Schad';

echo $schad->vorname, PHP_EOL; // gibt 'Frank' aus
echo $schad->getVorname(), PHP_EOL; // gibt ebenfalls 'Frank' aus
