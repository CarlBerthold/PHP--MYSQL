<?php
require_once __DIR__ . '/CRUD.php';

//var_dump($_POST);
if(!empty($_POST))
{
    $user = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'role' => 'user',
    ];
    create($user);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   .flex {
        display: flex;
        flex-direction:column;
    }

    .actions {
        display: flex;
        justify-content: center;
        margin: 10px;
    }
</style>
<body>
    <h1>Create</h1>

    <div class="actions">
        <a href="index.php"><button>Back to Listing</button></a>
    </div>

    <div>
        <?php if ($_POST && !empty($user)) : ?>
            <ul>
                <li><?= $user['first_name'] ?></li>
                <li><?= $user['last_name'] ?></li>
                <li><?= $user['email'] ?></li>
                <li><?= $user['role'] ?></li>
            </ul>
        <?php endif; ?>
    </div>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset class="flex">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" placeholder="First Name">
        
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" placeholder="Last Name">
       
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
       
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
    </fieldset>
       
        <!-- <label for="role">Role</label>
        <input type="text" name="role" id="role" placeholder="Role"> -->
        <div class="actions">
            <button type="submit">Create</button>
        </div>
    </form>
    
    
</body>
</html>