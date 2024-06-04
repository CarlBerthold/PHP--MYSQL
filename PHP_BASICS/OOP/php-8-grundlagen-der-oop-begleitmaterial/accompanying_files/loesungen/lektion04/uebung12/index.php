<?php

require_once 'schuh.php';

$meinSchuh = new Schuh();
$meinSchuh->setFarbe('rot');
$meinSchuh->setGroesse(46);
$meinSchuh->setTyp('Turnschuh');
$meinSchuh->setMaterial('Nylon');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mein Schuh</title>
</head>

<body>
    Mein Schuh ist ein <?php echo $meinSchuh->getTyp(); ?>
    und <?php echo $meinSchuh->getFarbe(); ?>.
    Er ist aus <?php echo $meinSchuh->getMaterial(); ?> gefertigt
    und hat die Schuhgr&ouml;&szlig;e <?php echo $meinSchuh->getGroesse(); ?>.
</body>

</html>