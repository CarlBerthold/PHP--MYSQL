<?php

class Person
{
    protected $vorname = '';

    function getVorname()
    {
        $vorname = strtolower($this->vorname);
        return $vorname;
    }

    function setVorname($vorname)
    {
        $this->vorname = trim($vorname);
    }

}

$person = new Person();
$person->setVorname(' Hans ');

echo $person->getVorname(), PHP_EOL; //gibt 'hans' aus

var_dump($person);
