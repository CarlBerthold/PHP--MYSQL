<?php

require_once __DIR__ . '/inc/database.inc.php';

$db = connectDB();

$post = [
    'id' => 6,
    'salutation' => 'Dr.',
    'surname' => 'Olaf',
    'name' => 'Schubert',
    'email' => 'olaf@Schubert.com',
    'password' => '123456',
    'birthday' => '1964-12-02',
];

$sql = "INSERT INTO users (salutation, surname, name, email, password, birthday) 
   
    VALUES (\"{$post['salutation']}\", \"{$post['surname']}\", \"{$post['name']}\", \"{$post['email']}\", \"{$post['password']}\", \"{$post['birthday']}\")";


extract($post);
$sql = "INSERT INTO users (salutation, surname, name, email, password, birthday) 
    VALUES (\"$salutation\", \"$surname\", \"$name\", \"$email\", \"$password\", \"$birthday\")";


$db->query($sql);