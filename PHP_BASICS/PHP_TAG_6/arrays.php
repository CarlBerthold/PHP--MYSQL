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

var_dump($visitors);
echo $visitors[0]['name'] . PHP_EOL;
var_dump($visitors[1]['name'] . ' from ' . $visitors[1]['city']); // string(18) "Jonas from Cologne"

echo $visitors[2]['name'] . ' from ' . $visitors[2]['city'] . ' has visited ' . $visitors[2]['visited'][1]; // Vasil from Munich has visited Sidney

// Array Methods

var_dump(in_array('Vasil', $visitors[2], true)); // returns true if the value is in the array
array_pop($visitors); // removes the last element from the array
array_shift($visitors); // removes the first element from the array
array_unshift($visitors); // adds an element to the beginning of the array
array_push($visitors); // adds an element to the end of the array


echo in_array('Vasil', $visitors[2]), PHP_EOL; // returns true if the value is in the array
echo $visitors[0]['name'];

// array indexed 
$fruits = [
    'cherry', // index 1
    'banana', // index 2
    'apple', // index 3
    'orange' // index 4
];

// sorting Ascending to the value of the array
sort($fruits);
asort($fruits);
var_dump($fruits);

// associative array
$associativeFruits = [
    'c' => 'cherry', // c is the key
    'b' => 'banana', // b is the key
    'a' => 'apple', // a is the key
    'o' => 'orange' // o is the key
];

sort($associativeFruits); // sort by value
asort($associativeFruits); // sort by value
ksort($associativeFruits); // sort by key
var_dump($associativeFruits); // array(4) { ["a"]=> string(5) "apple" ["b"]=> string(6) "banana" ["c"]=> string(6) "cherry" ["o"]=> string(6) "orange" }


$fruits = [
    'cherry', 
    'banana', 
    'apple', 
    'orange',
    'mango',
    'kiwi',
    'pear',
    'peach',
    'plum'
];

$moreFruits = [
    'grape',
    'strawberry',
    'raspberry',
    'blueberry',
    'blackberry',
    'currant',
    'gooseberry',
    'pomegranate',
    'pineapple',
    'papaya',
    'passion fruit'
];


$fruits = array_merge($fruits, $moreFruits); // merge two arrays concat them
var_dump($fruits);

$fruits = [...$fruits, ...$moreFruits]; // merge two arrays concat them
echo $str = implode(", ", $fruits);
var_dump($fruits);



$numbers = [1, 2, 3, 4, 4, 7, 8, 9];
// re declare the value of the 4 index to 5
$numbers[4] = 5;
// take array, index, length, replace value
array_splice($numbers, 5, 0, [6]);

var_dump($numbers);
