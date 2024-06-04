<?php

require_once 'fussball.php';

$ball = new Fussball();
$ball->setFarbe('rot');
$ball->setDurchmesser(40);

// $ball = 'test';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Wir produzieren</title>
</head>

<body>
    <?php if ($ball instanceof Fussball): ?>
        <?php echo $ball->beschreibeFussball(); ?>
    <?php else: ?>
        In $ball ist kein Fussball
    <?php endif; ?>
</body>

</html>