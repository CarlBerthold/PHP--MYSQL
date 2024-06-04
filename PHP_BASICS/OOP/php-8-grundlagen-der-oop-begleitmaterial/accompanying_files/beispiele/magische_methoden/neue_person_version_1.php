<?php

require_once 'person.php';

$remolt = new Person();
$remolt->setVorname('Marc');
$remolt->setNachname('Remolt');

var_dump($remolt);
