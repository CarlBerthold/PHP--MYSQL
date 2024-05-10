<?php


$visitors = [
    [
        'name' => 'Niclas',
        'age' => '21',
        'city' => 'Berlin',
        'organizer' => true,
        'visited' => [
            'Paris',
            'London',
            'New York'
        ]
    ],
    [
        'name' => 'Jonas',
        'age' => '21',
        'city' => 'Cologne',
        'visited' => [
            'Berlin',
            'Moskow',
            'Tokyo'
        ]

    ],
    [
        'name' => 'Vasil',
        'age' => '32',
        'city' => 'Munich',
        'visited' => [
            'Sidney',
            'Bangkok',
            'Cape Town'
        ]
    ],
];

// var_dump($visitors);
// echo $visitors[0]['name'] . PHP_EOL;

// var_dump($visitors[1]['name'] . ' from ' . $visitors[1]['city']); // string(18) "Jonas from Cologne"

echo $visitors[2]['name'] . ' from ' . $visitors[2]['city'] . ' has visited ' . $visitors[2]['visited'][1]; // Vasil from Munich has visited Sidney