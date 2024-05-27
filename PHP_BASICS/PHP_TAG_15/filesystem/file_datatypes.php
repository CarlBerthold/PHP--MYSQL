<?php


$content = TRUE;

file_put_contents('bool.txt', $content);


var_dump(file_get_contents('bool.txt'));


$content = [
    'name' => 'John Doe',
    'age' => 25,
    'city' => 'New York'
];


var_dump($contentBSON);