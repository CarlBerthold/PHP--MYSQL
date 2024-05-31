<?php

require_once __DIR__ . '/CRUD.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if ($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $user = find($id);
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        delete($id);
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    <h2>
        your sure you wanna delete this user ? 
    </h2>

    <div>
        <ul>
            <li><?= htmlspecialchars($user['first_name']) ?></li>
            <li><?= htmlspecialchars($user['last_name']) ?></li>
            <li><?= htmlspecialchars($user['email']) ?></li>
            <li><?= htmlspecialchars($user['role']) ?></li>
            <li><?= htmlspecialchars($user['registered_since']) ?></li>
            <li><?= htmlspecialchars($user['last_modified']) ?></li>
        </ul>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="post">
        <button type="submit">Delete</button>
    </form>
</body>
</html>