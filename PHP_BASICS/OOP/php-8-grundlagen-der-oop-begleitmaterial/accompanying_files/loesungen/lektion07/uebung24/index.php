<?php

require_once 'fussball.php';

$ball1 = new Fussball('schwarz', 20);
$ball2 = new Fussball('rot', 35);
$ball3 = new Fussball('blau', 22);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Viele Fussbaelle</title>
</head>

<body>
    <?php echo $ball1->beschreibeFussball(); ?><br/>
    <?php echo $ball2->beschreibeFussball(); ?><br/>
    <?php echo $ball3->beschreibeFussball(); ?><br/>
</body>

</html>