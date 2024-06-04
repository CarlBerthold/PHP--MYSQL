<?php

require_once 'schuh.php';

$meinSchuh = new Schuh();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mein Schuh</title>
</head>

<body>
    Mein Schuh ist ein <?php echo $meinSchuh->typ; ?>
    und <?php echo $meinSchuh->farbe; ?>.
    Er ist aus <?php echo $meinSchuh->material; ?> gefertigt
    und hat die Schuhgr&ouml;&szlig;e <?php echo $meinSchuh->groesse; ?>.
</body>

</html>