<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Buch anzeigen</title>
</head>

<body>
    <?php require 'navi.tpl.php'; ?>

    <p>
        Titel: <?= bereinige($buch->getTitel()) ?><br/>
        Preis: <?= (float)$buch->getPreis() ?>
    </p>
</body>

</html>