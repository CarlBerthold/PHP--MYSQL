<?php

require __DIR__ . '/connection.php';

/**
 * Retrieves user data from the database based on the provided ID or first name.
 *
 * @param int $id The ID of the user to retrieve. Defaults to 0.
 * @return array An array containing the user data.
 * @throws Exception If no user is found with the provided ID or first name.
 */
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


/**
 * Retrieves all users from the database.
 *
 * @return array An array containing all the users.
 */
function findAll() : array
{
    $dbConnection = globalDBConnection();

    $getAll = "SELECT * FROM users";
    $PDOStatement = $dbConnection->query($getAll);
    $users = $PDOStatement->fetchAll();
    return $users;
}

/**
 * Creates a new user record in the database.
 *
 * @param array $user The user data to be inserted into the database.
 * @return bool Returns true if the user record was successfully created, false otherwise.
 */
function create($user) : bool
{
    $dbConnection = globalDBConnection();

    $keys = implode(", ", array_keys($user));
    $values = ":" . implode(", :", array_keys($user));

    $sql = "INSERT INTO users ($keys) VALUES ($values)";

    $PDOStatement = $dbConnection->prepare($sql);
    return $PDOStatement->execute($user); // true or false
}

/**
 * Updates a user record in the database.
 *
 * @param array $array An array containing the updated user data.
 * @param int $id The ID of the user to update.
 * @return bool Returns true if the user record was successfully updated, false otherwise.
 * @throws Exception Throws an exception if the user record could not be updated.
 */
function update(array $array, $id = 0) : bool
{
    //var_dump($array);
    $user = $array;
    $dbConnection = globalDBConnection();

    $update = "UPDATE users SET id = :id, first_name = :first_name, last_name = :last_name, email = :email, password= :password, role = :role WHERE id = :id";
    $PDOStatement = $dbConnection->prepare($update);

    $user =$PDOStatement->execute([
        'id' => $id,
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'password' => $user['password'],
        'role' => $user['role'],
    ]);

    if(!$user) 
    {
        throw new Exception('could not update your user!! Something is fishy', 1);
    } else {
        return $user;
    }
  
}

/**
 * Deletes a user from the database based on the provided ID.
 *
 * @param int $id The ID of the user to delete.
 * @return bool True if the user was deleted successfully, false otherwise.
 */
function delete($id) : bool
{
    try {
        $dbConnection = globalDBConnection();
        $delete = "DELETE FROM users WHERE id = ?";
        $PDOStatement = $dbConnection->prepare($delete);
        return $PDOStatement->execute([$id]);
       
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}