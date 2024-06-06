<?php

$nachrichten = unserialize(file_get_contents('nachrichten.txt'));
foreach ($nachrichten as $n):
    echo '<h2>' . $n['titel'] . '</h2>';
    echo '<p class="inhalt">' . $n['inhalt'] . '</p>';
    echo '<p class="autor">geschrieben von ' . $n['autor'] . ' am ';
    echo $n['datum'] . '</p>';
endforeach;

?>