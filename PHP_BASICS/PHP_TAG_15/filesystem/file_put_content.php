<?php

$text = 'Sue sé alle di nel coloro alcun da le noi, occulta impetrata donne dallo primo, piaceri che cospetto prieghi spezial.';

file_put_contents('text.txt', $text);

$text1 = 'Wann ist endlich Pause????';

// file_put_contents('text.txt', $text1);
file_put_contents('text.txt', "\n" . $text1, FILE_APPEND);


echo $text, PHP_EOL;