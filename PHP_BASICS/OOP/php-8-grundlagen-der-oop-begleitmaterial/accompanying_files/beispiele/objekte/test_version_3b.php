<?php

require_once 'person.php';

class Test
{
    public function beschreibePerson($person)
    {
        return $person->beschreibe(); //gibt 'Die Person heisst !' zurueck
    }
}

session_start();
$test = new Test();

// Objekt aus der Session auslesen und als Parameter uebergeben
echo $test->beschreibePerson($_SESSION['teriete']);
