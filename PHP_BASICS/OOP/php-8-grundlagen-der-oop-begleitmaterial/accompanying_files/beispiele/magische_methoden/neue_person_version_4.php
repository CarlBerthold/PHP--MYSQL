<?php

require_once 'person_konstruktor_array.php';

$person = new Person(
    [
        'vorname' => 'Arthur',
        'nachname' => 'Dent',
    ]
);

echo $person;
