<?php

$sparbuch1 = new stdClass();
$sparbuch2 = new stdClass();

$sparbuch3 = $sparbuch2;

?>
<p>1/2 Gleich? <?php echo $sparbuch1 == $sparbuch2; //ja ?></p>
<p>1/2 Identisch? <?php echo $sparbuch1 === $sparbuch2; //nein ?></p>
<p>2/3 Identisch? <?php echo $sparbuch2 === $sparbuch3; //ja ?></p>