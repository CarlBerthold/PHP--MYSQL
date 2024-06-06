<?php

require_once __DIR__ . '/inc/Person.php'; 

class Test
{
    public function beschreibePerson()
    {
        $person = new Person(); // lokale Variable
        return $person->beschreibe(); //gibt 'Die Person heisst !' zurueck
    }
}

$test = new Test();
echo $test->beschreibePerson();
