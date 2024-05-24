<?php


$content = TRUE;

file_put_contents('bool.txt', $content);


var_dump(file_get_contents('bool.txt'));