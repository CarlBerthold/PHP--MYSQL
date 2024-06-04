<?php

require_once 'fussball.php';

$ball1 = new Fussball(
    ['farbe' => 'schwarz', 'durchmesser' => 20]
);
$ball2 = new Fussball(
    ['farbe' => 'rot', 'durchmesser' => 35]
);
$ball3 = new Fussball(
    ['farbe' => 'blau', 'durchmesser' => 22]
);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Viele Fussbaelle</title>
</head>

<body>
    <?php echo $ball1; ?><br/>
    <?php echo $ball2; ?><br/>
    <?php echo $ball3; ?><br/>
</body>

</html>