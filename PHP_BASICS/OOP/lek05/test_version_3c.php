<?php

// require_once __DIR__ . '/inc/Person.php'; 

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

/* object(__PHP_Incomplete_Class)#1 (3) {
    ["__PHP_Incomplete_Class_Name"]=>
    string(6) "Person"
    ["vorname":protected]=>
    string(3) "Jan"
    ["nachname":protected]=>
    string(7) "Teriete"
  } */

echo $test->beschreibePerson($person); // => Fatal error:  Uncaught Error: The script tried to call a method on an incomplete object. Please ensure that the class definition "Person" of the object you are trying to operate on was loaded _before_ unserialize() gets called or provide an autoloader to load the class definition in ...
