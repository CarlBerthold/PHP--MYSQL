<?php


$sparbuch1 = new stdClass();
$sparbuch2 = new stdClass();

if($sparbuch1 == $sparbuch2) {
    echo 'equal' . PHP_EOL;
} else {
    echo 'not equal' . PHP_EOL; 
}

// equal

if($sparbuch1 === $sparbuch2) {
    echo 'equal' . PHP_EOL;
} else {
    echo 'not equal' . PHP_EOL; 
}

// not equal

