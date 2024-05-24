<?php


$fruits = [
    [
        'name' => 'apple',
        'color' => 'red',
        'taste' => 'sweet',
    ],
    [
        'name' => 'banana',
        'color' => 'yellow',
        'taste' => 'sweet',
    ],
    [
        'name' => 'kiwi',
        'color' => 'green',
        'taste' => 'sour',
    ],
    [
        'name' => 'orange',
        'color' => 'orange',
        'taste' => 'sweet',
    ],
    [
        'name' => 'strawberry',
        'color' => 'red',
        'taste' => 'sweet',
    ],
];


$fruitsBeeingRed = array_filter($fruits, fn($fruit) => $fruit['color'] === 'red');
var_dump($fruitsBeeingRed);



$numbers = [1, 3, 5, 8, 12, 15, 27, 33, 34];

function isDivisibleByThree(int $number): bool
{
    return ($number % 3) === 0;
}
//echo isDivisibleByThree(4);

$numbersDivisibleByThree = array_filter($numbers, 'isDivisibleByThree');
$numbersDivisibleByThree = array_filter($numbers, function($number) {
    return !($number % 3) === 0;
});
$numbersDivisibleByThree = array_filter($numbers, fn ($number) => ($number % 3) !== 0);

var_dump($numbersDivisibleByThree);