<?php

require_once __DIR__ . '/inc/Person.php'; 

class Test
{
    // protected $person = new Person(); // => PHP Fatal error:  New expressions are not supported in this context in ...
    # in PHP ist es nicht möglich ein Attribut mit einer Instanz einer Klasse zu initialisieren
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
var_dump($test);

echo $test->beschreibePerson();
