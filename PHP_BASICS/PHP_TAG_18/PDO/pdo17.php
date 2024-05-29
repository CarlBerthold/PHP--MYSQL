<?php

require_once __DIR__ . '/inc/database.inc.php';

$db = connectDB();

$post = [
    'salutation' => 'Dr.',
    'surname' => 'Olaf',
    'name' => 'Schubert',
    'email' => 'olaf@Schubert.com',
    'password' => '123456',
    'birthday' => '1964-12-02',
];

// placeholder for values
$sql = "INSERT INTO (salutation, surname, name, email, password, birthday) 
    VALUES (?, ?, ?, ?, ?, ?)";

$PDOStatement = $db->prepare($sql);



// retrieve just the values from the array
$data = array_values($post);
// execute the statement with the values
$PDOStatement->execute($data);

// can be called multiple times as its prepared
// using the Post array
$PDOStatement->execute([
    $post['salutation'],
    $post['surname'],
    $post['name'],
    $post['email'],
    $post['password'],
    $post['birthday'],
]);


// can be inserted like this
$PDOStatement->execute([
    'Dr.',
    'Olaf',
    'Schubert',
    'olaf@Schubert.com',
    '123456',
    '1964-12-02',
]);