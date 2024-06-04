<?php

require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$buch = findeBuch($_GET['id']);

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

    <p>
        Titel: <?= bereinige($buch->getTitel()) ?><br/>
        Preis: <?= (float)$buch->getPreis() ?>
    </p>
</body>

</html>