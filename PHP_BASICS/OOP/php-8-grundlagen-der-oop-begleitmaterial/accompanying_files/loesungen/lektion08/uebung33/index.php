<?php

require_once 'adresse.php';
require_once 'person.php';

$person = new Person();
$person->setName('Max Muster');
$person->setEmail('max.muster@example.com');
$person->setStrasse('Musterstrasse');
$person->setHausnummer(99);
$person->setPlz(90411);
$person->setOrt('Musterstadt');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Personen und Adressen</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Strasse</th>
            <th>Plz</th>
            <th>Ort</th>
        </tr>
        <tr>
            <td><?php echo $person->getName(); ?></td>
            <td><?php echo $person->getEmail(); ?></td>
            <td><?php echo $person->getStrasse(); ?> <?php echo $person->getHausnummer(); ?></td>
            <td><?php echo $person->getPlz(); ?></td>
            <td><?php echo $person->getOrt(); ?></td>
        </tr>
    </table>
</body>

</html>