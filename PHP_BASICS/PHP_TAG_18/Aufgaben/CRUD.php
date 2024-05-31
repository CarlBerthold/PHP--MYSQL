<?php

require __DIR__ . '/conenection.php';


function globalDBConnection()
{
    global $db;
    return $db;
}

function find($id = 0): array 
{

    $dbConnection = globalDBConnection();


    if ($id != 0) {
        $get = "SELECT * FROM users WHERE id = :id";
        $PDOStatement = $dbConnection->prepare($get);
        $PDOStatement->execute(['id' => $id]);
        $user = $PDOStatement->fetch();
    } else {
        $get = "SELECT * FROM users WHERE first_name LIKE :first_name";
        $PDOStatement = $dbConnection->prepare($get);
        $PDOStatement->execute(['first_name' => '%' . $_POST['first_name'] . '%']);
        $user = $PDOStatement->fetchAll();
    }

    if (!$user) {
        throw new Exception('We are sorry!!  No user found with ' . '<strong>' . $_POST['first_name'] . '</strong>'  . ' as %name%', 1);
    } else {
        return $user;
    }
}


function findAll() : array
{
    $dbConnection = globalDBConnection();

    $getAll = "SELECT * FROM users";
    $PDOStatement = $dbConnection->query($getAll);
    $users = $PDOStatement->fetchAll();
    return $users;
}

function create($user) : bool
{
    $dbConnection = globalDBConnection();

    $keys = implode(", ", array_keys($user));
    $values = ":" . implode(", :", array_keys($user));

    $sql = "INSERT INTO users ($keys) VALUES ($values)";

    $PDOStatement = $dbConnection->prepare($sql);
    $PDOStatement->execute($user);

    return true;
}

function update(array $array, $id = 0) : bool
{

    $dbConnection = globalDBConnection();

    //var_dump($array);

    $update = "UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email WHERE id = :id";

    $PDOStatement = $dbConnection->prepare($update);
    //var_dump($PDOStatement);
    $user =$PDOStatement->execute([
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'id' => $id
    ]);

    //var_dump($user);

    if(!$user) 
    {
        throw new Exception('could not update your user!! Somehting is fishy', 1);
    } else {
        return $user;
    }
  
}

function delete($id) : array
{
    try {
        $dbConnection = globalDBConnection();
        $delete = "DELETE FROM users WHERE id = :id";
        $PDOStatement = $dbConnection->prepare($delete);
        $PDOStatement->execute([':id' => $id]);
        return [];
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}