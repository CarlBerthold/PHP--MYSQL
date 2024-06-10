<?php


// OOP - Object Oriented Programming in PHP

$sparbuch = [];
$sparbuch['glaeubiger'] = 'Jan Teriete';
$sparbuch['kontonummer'] = 'geheim';
$sparbuch['guthaben'] = 100;
$sparbuch['waehrung'] = 'Euro';

var_dump($sparbuch);

$sparbuch['guthaben'] += 99.89;

var_dump($sparbuch);
