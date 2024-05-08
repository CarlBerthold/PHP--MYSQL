<?php

$number = 3.14;
$number2 = '3.14';


var_dump($number == $number2);
var_dump($number === $number2);


function test($number, $number2) 
{
    var_dump($number == $number2);
    var_dump($number === $number2);
}


$time = DateTime::createFromFormat('H:i', '12:00');

var_dump($time);
