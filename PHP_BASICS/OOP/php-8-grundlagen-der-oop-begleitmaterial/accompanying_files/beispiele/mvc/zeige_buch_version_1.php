<?php

require_once 'inc/funktionen.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$buch = findeBuch(0);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ein klasse Buch</title>
</head>

<body>
    <h2 class="titel"><?= bereinige($buch->getTitel()) ?></h2>

    <p class="preis"><?= (float)$buch->getPreis() ?></p>
</body>

</html>