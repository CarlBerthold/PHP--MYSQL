<?php

require_once 'person.php';

$person = new Person();
$person->setName('Max Muster');
$person->setGeburtTimestamp(time());

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Person</title>
</head>

<body>
    <?php echo $person->getName(); ?> hat am <?php echo $person->getGeburtstag(); ?> Geburtstag.
</body>

</html>