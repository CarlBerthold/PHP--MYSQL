<?php

// Emuliert ein "SELECT * FROM buecher"

function findeBuecher()
{
    $buecher = [];
    $buecher[] = new Buch(
        [
            'titel' => 'Der Graf von Monte Christo',
            'preis' => 9.95,
        ]
    );
    $buecher[] = new Buch(
        [
            'titel' => 'Per Anhalter durch die Galaxis',
            'preis' => 7.95,
        ]
    );

    return $buecher;
}

// Emuliert ein "SELECT * FROM buecher WHERE id = :id"

function findeBuch($id)
{
    $buecher = findeBuecher();

    $buch = null;
    if (isset($buecher[$id])) {
        $buch = $buecher[$id];
    }

    return $buch;
}
