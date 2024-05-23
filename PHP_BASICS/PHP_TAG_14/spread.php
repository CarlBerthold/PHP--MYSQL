<?php

var_dump(time());
// '12-07-2024 09:00:00'
// seconds, minutes, hours, day, month, year

$exam = mktime(9,30, 0, 07, 12, 2024);
//echo $exam . PHP_EOL;

$now = time();
// casting into in to get the days as no decimal number
$daysTillExam = (int)(($exam - $now) / 60 / 60 / 24);

echo $daysTillExam . PHP_EOL;


$sqlDate = '2024-07-12 09:30:00';

$arrayDate = explode(' ', $sqlDate);

$date = explode('-', $arrayDate[0]);
$time = explode(':', $arrayDate[1]);

//var_dump($date, $time);


$exam = mktime($time[0], $time[1], $time[2], $date[1], $date[2], $date[0]);

echo $exam . PHP_EOL;