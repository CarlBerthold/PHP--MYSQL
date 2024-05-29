<?php

require_once __DIR__ . '/inc/database_sql_injection.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

$db = connectDB();

if ($_POST) {
    $sql = 'SELECT * FROM participant WHERE location LIKE :location';
    $PDOStatement = $db->prepare($sql);
    $PDOStatement->execute(['location' => '%' . $_POST['location'] . '%']);
    $data = $PDOStatement->fetchAll();
}

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <title>Suche</title>
</head>

<body>
    <h1>Standortsuche</h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="location">Suche:</label>
        <input type="text" name="location" id="location" placeholder="Bitte Standort eingeben">
        <button type="submit">suchen</button>
    </form>

    <?php if (isset($data)): ?>
        <p>Suchergebnis: </p>

        <ul>
            <?php foreach ($data as $participant): ?>
                <li>
                    <?= escape($participant['location']) ?>:
                    <?= escape($participant['lastname']) ?>, <?= escape($participant['firstname']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>

</html>

test"; UPDATE participant SET location = "wohnungslos"; --