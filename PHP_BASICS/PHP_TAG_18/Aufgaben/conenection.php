<?php

require_once __DIR__ . '/inc/database.php';

$db = connectDB();

return $db;

/* $id = 1;
$user = [
    'first_name' => 'Christian',
    'last_name' => 'Lindner',
    'email' => 'christian@lindner.com',
    'password' => '123456',
    'role' => 'user',
    'registered_since' => '2021-01-01',
    'last_modified' => '2021-01-01',
]; */


// GETALL
/* $getAll = "SELECT * FROM users";
$PDOStatement = $db->query($getAll);
$users = $PDOStatement->fetchAll(); */


// GET ONE
/* $get = "SELECT * FROM users WHERE id = :ìd";
$PDOStatement = $db->query($get);
$user = $PDOStatement->fetch();
var_dump($user);
 */

// PUT
/* $put = "UPDATE users SET first_name = 'Olaf' WHERE id :id";
$PDOStatement = $db->prepare($put);
$PDOStatement->execute(); */


// DELETE
/* $delete = "DELETE FROM users WHERE id = :id";
$PDOStatement = $db->prepare($delete);
$PDOStatement->execute(); */


// POST
$post = "INSERT INTO users (first_name, last_name, email, password, role, registered_since, last_modified) 
    VALUES (:first_name, :last_name, :email, :password, :role, :registered_since, :last_modified)";

$PDOStatement = $db->prepare($post);
var_dump($PDOStatement);
$PDOStatement->execute($user);

