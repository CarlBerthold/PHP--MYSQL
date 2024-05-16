<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($techStack as $areaName => $area) : ?>
        <!-- Nachladen von Partials (Teiltemplates) - d. i. das sog. 2-Step-View-Pattern gem. Martin Fowler -->
        <?php require 'templates/area.tpl.php'; ?>
    <?php endforeach; ?>
</body>

</html>