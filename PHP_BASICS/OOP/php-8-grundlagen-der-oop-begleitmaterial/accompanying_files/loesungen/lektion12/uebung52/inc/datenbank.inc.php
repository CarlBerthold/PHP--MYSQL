<?php

// Entwicklung PDO::ERRMODE_EXCEPTION und live PDO::ERRMODE_SILENT
$optionen = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
];

$db = new PDO(
    'mysql:host=localhost;dbname=buecher_verwaltung', // neue DB!
    'root',
    '', // leeres Kennwort
    $optionen
);

$db->query('SET NAMES utf8');
