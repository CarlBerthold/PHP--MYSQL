<?php

function holeDaten($datei)
{
    if (file_exists($datei)) {
        $nachrichten = unserialize(file_get_contents($datei));
    }

    // Wenn die Datei nicht existiert oder das Unserialize fehlschlaegt
    if (!isset($nachrichten) || !is_array($nachrichten)) {
        $nachrichten = [];
    }

    return $nachrichten;
}
