<?php

# Speichern komplexer Datenstrukturen (array) ohne die Verwendung von serialize

## Speichern einer Liste (numerisch lücken indiziertes Array)
$numbers = [1, 3, 5, 8, 12, 15, 27, 33, 34];

// Speichern als String
$numbersString = implode(',', $numbers);

file_put_contents('numbers.txt', $numbersString);

// Einlesen

var_dump(explode(',', file_get_contents('numbers.txt')));

## Speichern ohne Verlust der keys
$content = [
    'name' => 'Oli',
    'age' => 45,
    'organizer' => TRUE,
];

$contentString = var_export($content, true);

file_put_contents('user_array.txt', $contentString);

var_dump(file_get_contents('user_array.txt')); // string

// möglich wäre eval() - aber nie nie nie verwenden!

## als JSON speichern

// $contentJSON = json_encode($content, JSON_PRETTY_PRINT);
$contentJSON = json_encode($content);

var_dump($contentJSON);

file_put_contents('user_json.json', $contentJSON);

var_dump(json_decode(file_get_contents('user_json.json'), true));