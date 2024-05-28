<?php

// substr(string $string, int $offset, ?int $length = null): string

$text = 'Kleinem weh liebe ruft glück o, so weißt zu niedlich wo treibt dahinten verwundert im du. Wo gefärbt doch o.';
$ausschnitt = trim(substr($text, 23, 6));
echo $ausschnitt, PHP_EOL;

$ausschnitt = trim(substr($text, 3, 5));
echo $ausschnitt, PHP_EOL;

