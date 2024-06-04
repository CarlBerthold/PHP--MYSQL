<?php

require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$buecher = findeBuecher();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Buch anzeigen</title>
</head>

<body>
    <ul id="navi">
        <li><a href="liste.php">Startseite</a></li>
        <li><a href="neu.php">Buch anlegen</a></li>
    </ul>

    <ul>
        <?php foreach ($buecher as $id => $buch): ?>
            <li>
                <a
                    href="zeige.php?id=<?= (int)$id ?>"
                ><?= bereinige($buch->getTitel()) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>