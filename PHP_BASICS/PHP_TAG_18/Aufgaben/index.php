<?php
require __DIR__ . '/CRUD.php';


function welcomeMessage() : string
{
    return 'Welcome to the user management';
}


if(!$_POST) {
    $users = findAll();
    $infoMessage = 'Here is everything we have in our table, browse around and have a look';
    // echo count($users);
}

if($_POST) {
    try {
        $users = find();
        $infoMessage = 'Here is the result of your search for ' . '<strong>' . $_POST['first_name'] . '</strong>';
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    } if ($_POST['first_name'] == '') {
        $users = findAll();
        $infoMessage = 'you search for nothing, here is everything we have in our table';
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
    <h1><?php echo welcomeMessage() ?></h1>


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
                <p><?= $infoMessage ?></p>
                    <?php foreach($users as $user) : ?>
                        <div>
                            <ul>
                                <li><a href="user.php?id=<?= $user['id'] ?>"><?= $user['first_name'] ?></a></li>
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
                <p><?= $infoMessage ?></p>
                <div>
                    <?php foreach($users as $user) : ?>
                            <div>
                                <ul>
                                <li><a href="user.php?id=<?= $user['id'] ?>"><?= $user['first_name'] ?></a></li>
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

        <?php if (!empty($errorMessage)) : ?>
            <p><?= $errorMessage ?></p>
        <?php endif; ?>
    </div>
</body>
</html>