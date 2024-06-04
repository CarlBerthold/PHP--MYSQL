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

echo $schad->vorname; // gibt 'Frank' aus
echo $schad->getVorname(); // gibt ebenfalls 'Frank' aus
