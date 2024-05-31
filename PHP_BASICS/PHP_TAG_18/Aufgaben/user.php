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


if($_GET){
    //var_dump($_GET);
    $id = $_GET['id'];
    $user = find($id);
    //timeFormat($user['registered_since'], $user['last_modified']);
    //echo $user['last_modified'];
    //var_dump($user);    
} 

if($_POST)
{
    if(
        $_POST['first_name'] == '' ||
        $_POST['last_name'] == '' ||
        $_POST['email'] == ''
    ) {
        $errorMessage = 'Please fill in all the fields';
    }
    // check if the first_name from the POST is empty if return $user['first_name']

    //var_dump($_POST);
    $user['first_name'] = $_POST['first_name'] ?? $user['first_name'];
    $user['last_name'] = $_POST['last_name'] ?? $user['last_name'];
    $user['email'] = $_POST['email'] ?? $user['email'];
    $user['last_modified'] = date('Y-m-d H:i:s');
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
<body>
    <div>
            <ul>
                <li><?= $user['first_name']?></li>
                <li><?= $user['last_name']?></li>
                <li><?= $user['email']?></li>
                <li><?= $user['role']?></li>
                <li><?= $user['registered_since']?></li>
                <li><?= $user['last_modified']?></li>
            </ul>
        
    </div>
    <div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" value="<?= $user['first_name']?>">

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="<?= $user['last_name']?>">
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $user['email']?>">

            <label for="role">Role</label>
            <input type="text" id="role" value="<?= $user['role']?>" readonly>
            <label for="registered_since">Registered Since</label>

            <input type="date" id="registered_since" value="<?= timeFormat($user['registered_since'])?>" readonly>
            <label for="last_modified">Last Modified</label>

            <input type="date" id="last_modified" value="<?= timeFormat($user['last_modified'])?>" readonly>
            <button type="submit">Update</button>
        </form>

        <a href="delete.php?id=<?= $user['id'] ?>"><button>Delete</button></a>
        
    </div>
    <div>
        <a href="index.php">Back</a>
    </div>
    
</body>
</html>
