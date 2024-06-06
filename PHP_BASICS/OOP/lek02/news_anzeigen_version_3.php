<?php

$nachrichten = unserialize(file_get_contents('nachrichten.txt'));

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>News anzeigen</title>
    <link href="shared/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>Die aktuellen Nachrichten</h1>

    <?php foreach ($nachrichten as $n): ?>
        <h2><?php echo $n['titel']; ?></h2>

        <p class="inhalt"><?php echo $n['inhalt']; ?></p>
        <p class="autor">
            geschrieben von <?php echo $n['autor']; ?>
            am <?php echo $n['datum']; ?>
        </p>
    <?php endforeach; ?>
</body>

</html>