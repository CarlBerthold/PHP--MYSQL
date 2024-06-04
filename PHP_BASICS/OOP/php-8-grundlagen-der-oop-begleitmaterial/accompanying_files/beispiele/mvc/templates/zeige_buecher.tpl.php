<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Buecherliste</title>
</head>

<body>
    <?php foreach ($buecher as $buch): ?>
        <h2 class="titel"><?= bereinige($buch->getTitel()) ?></h2>
        <p class="preis"><?= (float)$buch->getPreis() ?></p>
    <?php endforeach; ?>
</body>

</html>