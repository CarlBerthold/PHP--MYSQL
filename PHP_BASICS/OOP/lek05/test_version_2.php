<?php

require_once __DIR__ . '/inc/Person.php'; 

class Test
{
    public function beschreibePerson($person)
    {
        return $person->beschreibe(); //gibt 'Die Person heisst !' zurueck
    }
}

$teriete = new Person();
$test = new Test();
echo $test->beschreibePerson($teriete); //Objekt wird uebergeben
