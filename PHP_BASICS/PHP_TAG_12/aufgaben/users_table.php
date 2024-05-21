<?php
require './users.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userstable</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <?php foreach($users[0] as $key => $value) : ?>
                <th><?= $key ?></th>
            <?php endforeach; ?>
        </tr>
        <?php 
        foreach($users as $user) : ?>
            <tr>
                <?php foreach($user as $key => $value) : ?>
                    <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </thead>
    <tbody>
    </tbody>
</body>
</html>