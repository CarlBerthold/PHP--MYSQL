<?php

require_once __DIR__ . '/inc/database.inc.php';

$db = connectDB();

# einen Datensatz verändern

// Datensatz abfragen

$sql = 'select * from users where id=4';

// holds the db conecction via PDO Object
$PDOStatement = $db->query($sql);

// fetches one data from the database and saves it in the $user variable
$user = $PDOStatement->fetch();

var_dump($user);

// change the salutation of the user
$user['salutation'] = 'Dr.';
// runs the statement and persists the changes in the database
$sql = 'update users set salutation ="' . $user['salutation'] . '" where id=4';
// sql query 
var_dump($sql);

// dump the new changed user Dr. 
var_dump($user);
