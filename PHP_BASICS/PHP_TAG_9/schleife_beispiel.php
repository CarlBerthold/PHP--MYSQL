<?php

/* $numbers = [
    81,
    82,
    83,
    84,
    85,
    86,
    87,
    88,
    91,
    92,
    93,
    94,
    95,
    96,
    97,
    98,
    99,
]; */

/* for ($i = 0; $i < count($numbers); $i++) {
    echo "[$i] => $numbers[$i]", PHP_EOL;
} */


/* unset($numbers[5], $numbers[9], $numbers[10], $numbers[13]);

$count = count($numbers);

for ($i = 0; $i < $count; $i++) {
    if(!isset($numbers[$i])) {
        $count++;
        continue;
    }
    
    echo "[$i] => $numbers[$i]", PHP_EOL;
} */



$user = [
    'firstname' => 'Alice',
    'lastname' => 'Doe',
    'age' => 25,
    'email' => 'doe@home.de',
    'student' => true,
];


$userKeys = array_keys($user);
$userValues = array_values($user);

// $finalArray = array_merge($userKeys, $userValues);

// var_dump($finalArray);



$count = count($user);

for ($i = 0; $i < $count; $i++) {
    echo "[$userKeys[$i]] => $userValues[$i]", PHP_EOL;
}