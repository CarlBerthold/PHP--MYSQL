<?php

function holeAlleMitarbeiter()
{
    $mitarbeiter = unserialize(file_get_contents('mitarbeiter.txt'));

    return $mitarbeiter;
}

function holeWeiblicheMitarbeiter()
{
    $mitarbeiter = unserialize(file_get_contents('mitarbeiter.txt'));

    $frauen = [];
    foreach ($mitarbeiter as $m) {
        if ($m['geschlecht'] === 'w') {
            $frauen[] = $m;
        }
    }

    return $frauen;
}
