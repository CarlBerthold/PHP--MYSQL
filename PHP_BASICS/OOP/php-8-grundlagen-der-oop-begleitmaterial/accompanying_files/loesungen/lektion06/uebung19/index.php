<?php

require_once 'person.php';

$person = new Person();
$person->setVorname('Max');
$person->setNachname('Muster');
$person->setGeburtTimestamp(time());

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Person</title>
</head>

<body>
    <?php echo $person->getName(); ?>
</body>

</html>