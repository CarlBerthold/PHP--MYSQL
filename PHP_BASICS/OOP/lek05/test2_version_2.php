<?php

require_once __DIR__ . '/inc/Person.php';

$test2 = new Person();

//hier passieren viele Dinge ...
$test2 = 'Das ist ein Test';
$test2 = new stdClass();
//hier passieren noch mehr Dinge ...

// if (is_object($test2)) {
// if ($test2 instanceof 'Person') { // => Parse error: syntax error, unexpected single-quoted string "Person" in ...
if ($test2 instanceof Person) {
    echo $test2->beschreibe();
} else {
    echo '$test2 ist keine Instanz der Klasse Person', PHP_EOL;
}


