<?php
require_once __DIR__ . '/CRUD.php';
$user = [];



function timeFormat(...$times) : string
{
    $formattedTimes = [];
    foreach ($times as $time) {
        $formattedTimes[] = date('Y-m-d', strtotime($time));
    }
    return implode(', ', $formattedTimes);
}

function greeting($user) : string
{
    return 'Hello ' . $user['firstname'] . ' ' . $user['lastname'];
}


if($_GET){
    //var_dump($_GET);
    $id = $_GET['id'];
    $user = find($id);
    //timeFormat($user['created_at'], $user['updated_at']);
    //echo $user['updated_at'];
    //var_dump($user);    
} 

if($_POST)
{
    if(
        $_POST['firstname'] == '' ||
        $_POST['lastname'] == '' ||
        $_POST['email'] == ''
    ) {
        $errorMessage = 'Please fill in all the fields';
    }
    // check if the firstname from the POST is empty if return $user['firstname']

    //var_dump($_POST);
    $user['firstname'] = $_POST['firstname'] ?? $user['firstname'];
    $user['lastname'] = $_POST['lastname'] ?? $user['lastname'];
    $user['email'] = $_POST['email'] ?? $user['email'];
    $user['updated_at'] = date('Y-m-d H:i:s');
    $user['id'] = $id ?? find();
    
    update($user, $user['id']);
    //header('Location: user.php?id=' . $user['id']);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<style>
    .flex {
        display: flex;
        flex-direction:column;
    }

    .flex > input {
        width: 100%;
        margin-bottom: 10px;
    }

    fieldset {
        display: flex;
        justify-content: space-evenly;
    }

    .actions {
        display: flex;
        justify-content: center;
        margin: 10px;
    }

</style>
<body>
    <div>
        <h2><?= greeting($user) ?></h2>
            <ul>
                <li><?= $user['firstname']?></li>
                <li><?= $user['lastname']?></li>
                <li><?= $user['email']?></li>
                <li><?= $user['role']?></li>
                <li><?= $user['created_at']?></li>
                <li><?= $user['updated_at']?></li>
            </ul>

            <div class="actions">
                <a href="index.php"><button>Back</button></a>
                <a href="delete.php?id=<?= $user['id'] ?>"><button>Delete</button></a>
            </div>
        
    </div>
    
    <div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset class="flex">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" value="<?= $user['firstname']?>">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" value="<?= $user['lastname']?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $user['email']?>" size="30">
            </fieldset>

            <fieldset>
            <label for="role">Role</label>
            <input type="text" id="role" value="<?= $user['role']?>" readonly>
            <label for="created_at">Registered Since</label>
            <input type="date" id="created_at" value="<?= timeFormat($user['created_at'])?>" readonly>
            <label for="updated_at">Last Modified</label>
            <input type="date" id="updated_at" value="<?= timeFormat($user['updated_at'])?>" readonly>
            </fieldset>

            <div class="actions">
                <button type="submit">Update</button>
            </div>
            
        </form>
    </div>
    <div>
        
    </div>
    
</body>
</html>
