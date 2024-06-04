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