<?php

$person = new Person($_POST);

$mapper = new PersonMapper();
$mapper->speichere($person);
