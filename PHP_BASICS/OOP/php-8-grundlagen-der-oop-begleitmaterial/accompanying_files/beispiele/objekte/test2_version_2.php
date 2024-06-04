<?php

require_once 'person.php';
$test2 = new Person();

//hier passieren viele Dinge ...
$test2 = 'Das ist ein Test';
//hier passieren noch mehr Dinge ...

if ($test2 instanceof Person) {
    echo $test2->beschreibe();
}
