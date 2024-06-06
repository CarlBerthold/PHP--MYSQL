<?php

require_once __DIR__ . '/inc/Person.php';

$test2 = new Person();

var_dump($test2);

//hier passieren viele Dinge ...
$test2 = 'Das ist ein Test';
//hier passieren noch mehr Dinge ...

echo $test2->beschreibe(); // => Fatal error: Uncaught Error: Call to a member function beschreibe() on string in ...
