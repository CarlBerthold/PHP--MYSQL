<?php

require_once 'person.php';

class Test
{
    public function beschreibePerson()
    {
        $person = new Person();
        return $person->beschreibe(); //gibt 'Die Person heisst !' zurueck
    }
}

$test = new Test();
echo $test->beschreibePerson();
