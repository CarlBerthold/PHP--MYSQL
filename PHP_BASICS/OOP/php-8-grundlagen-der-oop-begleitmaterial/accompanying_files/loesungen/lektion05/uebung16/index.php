<?php

require_once 'fussball.php';

$ball = new Fussball();
$ball->setFarbe('rot');
$ball->setDurchmesser(40);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wir produzieren</title>
</head>

<body>
    <?php echo $ball->beschreibeFussball(); ?>
</body>

</html>