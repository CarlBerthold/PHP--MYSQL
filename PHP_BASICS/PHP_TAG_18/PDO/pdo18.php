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
$sql = "INSERT INTO users(salutation, surname, name, email, password, birthday) 
    VALUES (:salutation, :surname, :name, :email, :password, :birthday)";

$PDOStatement = $db->prepare($sql);

// execute the statement with the values
$PDOStatement->execute($post);

// can be called multiple times as its prepared
// using the Post array
/* $PDOStatement->execute([
    $post['salutation'],
    $post['surname'],
    $post['name'],
    $post['email'],
    $post['password'],
    $post['birthday'],
]); */


// can be inserted like this
/* $PDOStatement->execute([
    'salutation' => 'Dr.',
    'surname' => 'Olaf',
    ':name' => 'Schubert',
    'email' => 'Olaf@Schubert',
    'password' => '123456',
    'birthday' => '1964-12-02',
]); */


// annonymus placeholder for no assosiated array
/* $id = 3;
$PDOStatement = $db->prepare('SELECT * FROM benutzer WHERE id = ?');
$PDOStatement->execute([$id]); */


// named placeholder for assosiated array
/* $PDOStatement = $db->prepare('SELECT * FROM benutzer WHERE id = :id');
$PDOStatement->execute(['id' => $id]); */