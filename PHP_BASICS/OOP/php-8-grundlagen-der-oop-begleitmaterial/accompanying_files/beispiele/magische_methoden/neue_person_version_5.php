<?php

require_once 'person_konstruktor_array.php';

$person = new Person(
    [
        'vorname' => 'Marc',
        'nachname' => 'Remolt',
    ]
);

//hier passieren viele Dinge ...

$formularDaten = [
    'vorname' => 'Jan',
    'nachname' => 'Teriete',
];

$person->setVorname($formularDaten['vorname']);
$person->setNachname($formularDaten['nachname']);

echo $person;
