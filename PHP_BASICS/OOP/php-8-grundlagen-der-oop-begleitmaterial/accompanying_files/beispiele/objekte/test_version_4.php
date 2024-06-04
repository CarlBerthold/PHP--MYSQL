<?php

require_once 'person.php';

class Test
{
    protected $person;

    public function setPerson($person)
    {
        $this->person = $person;
    }

    public function getPerson()
    {
        return $this->person;
    }

    public function beschreibePerson()
    {
        $person = $this->getPerson();
        return $person->beschreibe(); //gibt 'Die Person heisst !' zurueck
    }
}

$teriete = new Person();
$test = new Test();
$test->setPerson($teriete); //Objekt wird uebergeben
echo $test->beschreibePerson();
