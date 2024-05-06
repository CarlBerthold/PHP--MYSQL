<?php

// HEREDOC-String
$tag = 'Montag';

$text = <<<hdVariablen
Ein weiterer String, \ndiesmal mit Escape-Sequenzen
und einer Variablen \$tag = $tag,
die dann aufgelöst wird!
hdVariablen;

echo $text  . PHP_EOL;

$description = <<<text
Ein weiterer String, \ndiesmal mit Escape-Sequenzen
und einer Variablen \$tag = $tag,
die dann aufgelöst wird!
text;

echo $description  . PHP_EOL;


// NOWDOC-String
$tag = 'Montag';

$text = <<<'EOT'
Nochmal ein String, \nwieder mit Escape-Sequenzen
und einer Variablen \$tag = $tag,
die dann nicht aufgelöst wird!
EOT;

echo $text  . PHP_EOL;