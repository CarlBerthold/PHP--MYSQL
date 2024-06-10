<?php


#Interface des DateTime-Objekts

$datetime = new DateTime('+7 days');
$datetime = new DateTime('+7 days');

var_dump($datetime1, $datetime2);




#Change the timeZone

date_default_timezone_set('Australia/Darwin');

$datetime3 = new DateTime();

//var_dump($datetime3);

$datetime3->setDate(2020, 12, 31);

var_dump($datetime3);

echo $datetime3, PHP_EOL;
