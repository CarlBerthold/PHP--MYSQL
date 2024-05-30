<?php

require __DIR__ . '/conenection.php';


function globalDBConnection () 
{
    global $db;
    return $db;
}

function find() : array
{

    $dbConnection = globalDBConnection();

    $get = "SELECT * FROM users WHERE first_name LIKE :first_name";
    $PDOStatement = $dbConnection->prepare($get);
    

  

    $PDOStatement->execute(['first_name' => '%' . $_POST['first_name'] . '%']);
   
    $user = $PDOStatement->fetchAll();

    if(!$user) {
        throw new Exception('No user found with ' . $_POST['first_name'] . ' as %name%');
    }

    return $user;
}


function findAll()
{
    $dbConnection = globalDBConnection();

    $getAll = "SELECT * FROM users";
    $PDOStatement = $dbConnection->query($getAll);
    $users = $PDOStatement->fetchAll();
    return $users;
}

function create()
{

    $dbConnection = globalDBConnection();

    $create = "INSERT INTO users 
        (first_name, last_name, email, password, role, registered_since, last_modified) 
    VALUES 
        (:first_name, :last_name, :email, :password, :role, :registered_since, :last_modified)";
    $PDOStatement = $dbConnection->prepare($create);
    $PDOStatement->execute([$create]);
}

function update()
{
    $dbConnection = globalDBConnection();

    $update = "UPDATE users SET first_name = 'Olaf' WHERE id :id";
    $PDOStatement = $dbConnection->prepare($update);
    $PDOStatement->execute([$update]);
}

function delete($dbConnection)
{
    $delete = "DELETE FROM users WHERE id = :id";
    $PDOStatement = $dbConnection->prepare($delete);
    $PDOStatement->execute([$delete]);
}