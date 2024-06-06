<?php

$sparbuch = [];
$sparbuch['glaeubiger'] = 'Jan Teriete';
$sparbuch['kontonummer'] = 'geheim';
$sparbuch['guthaben'] = 100;
$sparbuch['waehrung'] = 'Euro';

var_dump($sparbuch);

// Einzahlung vornehmen

$sparbuch['guthaben'] += 99.89;

var_dump($sparbuch);