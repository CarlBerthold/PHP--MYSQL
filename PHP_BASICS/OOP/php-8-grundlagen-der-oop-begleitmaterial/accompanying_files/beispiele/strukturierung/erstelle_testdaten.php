<?php

$nachrichten = [
    0 => [
        'titel' => 'Erster Eintrag',
        'inhalt' => 'Dies ist mein erster Eintrag.',
        'autor' => 'Arthur',
        'datum' => date('d.m.Y', time() - 424242)
    ],
    1 => [
        'titel' => 'Zweiter Eintrag',
        'inhalt' => 'Und noch ein Eintrag ...',
        'autor' => 'Edmond',
        'datum' => date('d.m.Y')
    ],
];

file_put_contents('nachrichten.txt', serialize($nachrichten));

$mitarbeiter = [
    0 => [
        'vorname' => 'Thorsten',
        'name' => 'Schneider',
        'geschlecht' => 'm'
    ],
    1 => [
        'vorname' => 'Monika',
        'name' => 'Beck',
        'geschlecht' => 'w'
    ],
];

file_put_contents('mitarbeiter.txt', serialize($mitarbeiter));
