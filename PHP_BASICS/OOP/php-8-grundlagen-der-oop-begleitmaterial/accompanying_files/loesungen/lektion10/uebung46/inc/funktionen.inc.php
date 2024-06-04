<?php

function bereinige($benutzerEingabe, $encoding = 'UTF-8')
{
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function findeBuecher()
{
    $datei = 'daten/buecher.txt';

    if (file_exists($datei)) {
        $buecher = unserialize(file_get_contents($datei));
    }

    // Wenn die Datei nicht existiert oder das Unserialize fehlschlaegt
    if (!isset($buecher) || !is_array($buecher)) {
        $buecher = [];
    }

    return $buecher;
}

function findeBuch($id)
{
    $buecher = findeBuecher();

    $buch = null;
    if (isset($buecher[$id])) {
        $buch = $buecher[$id];
    }

    return $buch;
}

function speichereBuch(Buch $buch)
{
    $buecher = findeBuecher();

    $buecher[] = $buch;

    file_put_contents('daten/buecher.txt', serialize($buecher));
}
