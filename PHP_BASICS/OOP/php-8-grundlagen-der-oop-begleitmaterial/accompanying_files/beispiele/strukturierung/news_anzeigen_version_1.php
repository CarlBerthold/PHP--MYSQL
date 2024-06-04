<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>News anzeigen</title>
</head>

<body>
    <h1>Die aktuellen Nachrichten</h1>
    <?php

    $nachrichten = unserialize(file_get_contents('nachrichten.txt'));
    foreach ($nachrichten as $n):
        echo "<h2>" . $n['titel'] . "</h2>";
        echo "<p>" . $n['inhalt'] . "</p>";
        echo "<p>geschrieben von " . $n['autor'] . " am ";
        echo $n['datum'] . "</p>";
    endforeach;

    ?>
</body>

</html>