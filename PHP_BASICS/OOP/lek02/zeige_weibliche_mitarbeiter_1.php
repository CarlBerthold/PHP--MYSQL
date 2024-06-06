<?php

# die Filterung nach weiblichen Mitarbeitern ist möglicherweise eine einmalige Aufgabe, weshalb zu überlegen ist, ob hierfür überhaupt eine eigene Funktion geschrieben werden muss
## alternativ: => anonyme Funktion anstelle der Callback

require_once 'funktionen_1.inc.php';

$employees = getEmployees();
// $women = array_filter($employees, 'isFemale');
/* $women = array_filter($employees, function ($employee) {
    return $employee['geschlecht'] === 'w';
}); */
// kürzer mittels arrow function
$women = array_filter($employees, fn ($employee) => $employee['geschlecht'] === 'w');


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