<?php

require_once 'funktionen.inc.php';

$mitarbeiter = holeAlleMitarbeiter();
$frauen = array_filter($mitarbeiter, 'istWeiblich');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weibliche Mitarbeiter</title>
</head>

<body>
    <ul>
        <?php foreach ($frauen as $f): ?>
            <li>
                <?php echo $f['vorname']; ?>
                <?php echo $f['name']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>