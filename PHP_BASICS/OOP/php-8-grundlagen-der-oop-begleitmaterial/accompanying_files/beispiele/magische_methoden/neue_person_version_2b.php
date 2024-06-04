<?php

require_once 'person_to_string.php';

$remolt = new Person();
$remolt->setVorname('Marc');
$remolt->setNachname('Remolt');

echo $remolt; //Gibt "Marc Remolt" aus
