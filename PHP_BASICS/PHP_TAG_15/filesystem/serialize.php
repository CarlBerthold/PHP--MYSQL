<?php

# Speichern komplexer Datenstrukturen (Bsp. aus WBT)

$visitors = [
    [
        'name' => 'Niclas',
        'age' => '21',
        'city' => 'Berlin',
        'organizer' => true,
        'visited' => [
            'Laracon',
            'DevDays',
        ],
    ],
    [
        'name' => 'Jonas',
        'age' => '21',
        'city' => 'Cologne',
        'organizer' => false,
        'visited' => [],

    ],
    [
        'name' => 'Vasil',
        'age' => '32',
        'city' => 'Munich',
        'organizer' => NULL,
        'visited' => [
            'Laracon',
        ],
    ],
];

file_put_contents('visitors.txt', serialize($visitors));