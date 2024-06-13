<?php

require_once __DIR__ . '/Grundlage/inc/database.inc.php';
require_once __DIR__ . '/inc/seeder.inc.php';

$users = generateUser(25);

$admins = generateUser(5, TRUE);

//var_dump($data);
//exit;

$db = connectDB();


$create = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(80) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(8) NOT NULL DEFAULT 'inactive',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY (email)
)";

$createTable = $db->prepare($create);
$createTable->execute();


// var_dump($users);

$insert = "INSERT INTO users (firstname, lastname, email, password, role) VALUES (?, ?, ?, ?, ?)";

$statement = $db->prepare($insert);

// merge the two arrays for one loop
$data = array_merge($users, $admins);

foreach ($data as $members) {
    $statement->execute([
        $members['firstname'],
        $members['lastname'],
        $members['email'],
        $members['password'],
        $members['role'],
    ]);
}

echo "Data inserted successfully!";