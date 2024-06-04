<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Buecherliste</title>
</head>

<body>
    <?php foreach ($buecher as $buch): ?>
        <?php require 'buch.tpl.php'; ?>
    <?php endforeach; ?>
</body>

</html>