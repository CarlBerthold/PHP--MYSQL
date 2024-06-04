<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Buch anzeigen</title>
</head>

<body>
    <?php require 'navi.tpl.php'; ?>

    <p>
        Titel: <?php echo $buch->getTitel(); ?><br/>
        Preis: <?php echo $buch->getPreis(); ?>
    </p>
</body>

</html>