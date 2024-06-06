<?php

require_once __DIR__ . '/inc/Person.php'; 

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

$person = $_SESSION['teriete'];

echo '<pre>';
var_dump($person);

echo $test->beschreibePerson($person);
