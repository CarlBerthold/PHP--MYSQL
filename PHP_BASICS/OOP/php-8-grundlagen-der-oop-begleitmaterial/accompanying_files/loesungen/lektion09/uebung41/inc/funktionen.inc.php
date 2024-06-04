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
    $buecher = [];
    $buecher[0] = new Buch(
        [
            'titel' => 'Der Graf von Monte Christo',
            'preis' => 9.95,
        ]
    );
    $buecher[1] = new Buch(
        [
            'titel' => 'Per Anhalter durch die Galaxis',
            'preis' => 7.95,
        ]
    );

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
    // Das tut noch nichts.
}
