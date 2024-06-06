<?php

require_once 'funktionen_2.inc.php';

/* $employees = getEmployees();
$women = array_filter($employees, 'isFemale'); */
$women = getEmployees('w');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weibliche Mitarbeiter</title>
</head>

<body>
    <ul>
        <?php foreach ($women as $woman): ?>
            <li>
                <?php echo $woman['vorname']; ?>
                <?php echo $woman['name']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>