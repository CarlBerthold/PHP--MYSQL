<?php

// Simulation Benutzereingabe
$userInput = <<<EOT
<div>
    <p>
        Um <b style="font-size: 3em" onclick="alert('huhu')">nebel</b> steigt die die <strong style="font-size: 3em">unbestimmten</strong> bringt in freundliche, ich festzuhalten in <i>geneigt</i> freundliche, beifall und die den in es lied es, sage <em>labyrinthisch</em> jugendlich zauberhauch diesmal schöne,<br> tage herz nun weich euren diesmal mein, in zerstoben den ihr walten geisterreich ernsten. So so der der äolsharfe labyrinthisch labyrinthisch labyrinthisch..
    </p>
</div>
EOT;

$userInput = strip_tags($userInput, '<strong><i><em>');

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strip_tags</title>
</head>
<body>
    <article>
        <?= $userInput ?>
    </article>
</body>
</html>