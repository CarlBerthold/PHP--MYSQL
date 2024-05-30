<?php
require __DIR__ . '/CRUD.php';

if(!$_POST) {
    $users = findAll();
    // echo count($users);
}

if($_POST) {

    try {
        $users = find();
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    } 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_management</title>
</head>
<body>
    <h1>User Management</h1>


    <div>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="search"></label>
            <input type="text" name="first_name" id="search" placeholder="search for name">
            <button type="submit">Search</button>
        </form>
    </div>
    
    <div>
        <?php if(empty($errorMessage)) : ?>
            <?php if(!$_POST && !empty($users)) : ?>
                <p>we just got everything we have in our table</p>
                    <?php foreach($users as $user) : ?>
                        <div>
                            <ul>
                                <li><?= $user['first_name'] ?></li>
                                <li><?= $user['last_name'] ?></li>
                                <li><?= $user['email'] ?></li>
                                <li><?= $user['role'] ?></li>
                                <li><?= $user['registered_since'] ?></li>
                                <li><?= $user['last_modified'] ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
            <?php endif; ?>

        
            <?php if($_POST && !empty($users)) : ?>
                <p>here the result will be shown</p>
                <div>
                    <?php foreach($users as $user) : ?>
                            <div>
                                <ul>
                                <li><?= $user['first_name'] ?></li>
                                <li><?= $user['last_name'] ?></li>
                                <li><?= $user['email'] ?></li>
                                <li><?= $user['role'] ?></li>
                                <li><?= $user['registered_since'] ?></li>
                                <li><?= $user['last_modified'] ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <h2><?= $errorMessage ?></h2>
    </div>


</body>
</html>