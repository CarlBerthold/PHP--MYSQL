<?php

class Person
{
    protected $vorname = '';

    function getVorname()
    {
        return $this->vorname;
    }

    function setVorname($vorname)
    {
        $this->vorname = trim($vorname);
    }

}

$person = new Person();
$person->setVorname(' Hans ');

echo $person->getVorname(); //gibt 'Hans' aus
