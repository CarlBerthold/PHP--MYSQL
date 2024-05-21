<?php
require './users.php';

// set a variable for the id we are looking for 
$id = 3;

// check if the id is present and set the $exampleUser to the user with the id
$exampleUser = array_column($users, null, 'id');

if (array_key_exists($id, $exampleUser)) {
    $exampleUser = $exampleUser[$id];
} else {
    $exampleUser = [];
}

$isRegistered = false;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <?php if ($isRegistered) : ?>
        <fieldset>
            <label for="id">ID:</label>
            <input 
                type="number" 
                name="id" 
                id="id"
                readonly 
                value="<?= $exampleUser['id'] ?? '' ?>"
                placeholder="<?= $_POST['value'] ?? '' ?>"/>
        </fieldset>
    <?php endif; ?>

        <fieldset>
            <label for="firstName">Firstname: </label>
            <input 
                type="text" 
                name="firstName" 
                id="firstName"
                placeholder="John"
                value="<?= $exampleUser['first_name'] ?? '' ?>"/>

            <label for="lastName">Lastname: </label>
            <input 
                type="text" 
                name="lastName" 
                id="lastName"
                placeholder="Doe"
                value="<?= $exampleUser['last_name'] ?? '' ?>"/>
        </fieldset>

        

        <?php if($isRegistered) : ?>
            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="inactive">Inactive</option>
            </select>
        <?php endif; ?>

            <label for="email">Email: </label>
            <input 
                type="email" 
                name="email" 
                id="email"
                placeholder="example@example.com"
                size="30"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                value="<?= $exampleUser['email'] ?? '' ?>"/>
        </fieldset>

        <?php if($isRegistered) : ?>
        <fieldset>
            <label for="registered_since">Registered since</label>
            <input 
                type="date" 
                name="registered_since" 
                id="registered_since"
                value="<?= $exampleUser['registered_since'] ?? '' ?>"
                readonly/>

            <label for="last_modified">Last modified</label>
            <input 
                type="date" 
                name="last_modified" 
                id="last_modified"
                value="<?= $exampleUser['last_modified'] ?? '' ?>"
                readonly/>
        </fieldset>
        <?php endif; ?>

        <fieldset>
            <label for="password">Password: </label>
            <input 
                type="password" 
                name="password" 
                id="password"
                value="<?= $exampleUser['password'] ?? '' ?>"/>

            <label for="passwordConfirmation">Confirm Password: </label>
            <input 
                type="password" 
                name="passwordConfirmation" 
                id="passwordConfirmation"
                value="<?= $exampleUser['password'] ?? '' ?>"/>
        </fieldset>

        <button type="submit">Register</button>
    </form>
</body>
</html>
