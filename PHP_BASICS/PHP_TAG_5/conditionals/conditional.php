<?php

$condition = false;

if ($condition || !$condition) {
    echo 'Bedingung ist wahr', PHP_EOL;
} else {
    echo 'Bedingung ist falsch', PHP_EOL;
}

if ($condition) {
    echo 'testo';
} else if ($condition2) {
    echo 'testo2';
} else {
    echo 'testo3';
}

$name = 'Carl';

if($name) {
    echo 'Hallo ' . $name . '!', PHP_EOL;
}