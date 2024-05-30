<?php
require_once __DIR__ . '/CRUD.php';



$edit = FALSE;




if($_GET){
    $id = $_GET['id'];
    $user = find($id);
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

    </div>
    
</body>
</html>
