<?php

$datei = 'nachrichten.txt';

if (file_exists($datei)) {
    $nachrichten = unserialize(file_get_contents($datei));
}

if (!isset($nachrichten) || !is_array($nachrichten)) {
    $nachrichten = [];
}

var_dump($nachrichten);
