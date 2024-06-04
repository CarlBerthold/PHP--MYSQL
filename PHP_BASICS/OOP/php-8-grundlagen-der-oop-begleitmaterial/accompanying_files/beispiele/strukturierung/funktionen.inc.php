<?php

function holeAlleMitarbeiter()
{
    $mitarbeiter = unserialize(file_get_contents('mitarbeiter.txt'));

    return $mitarbeiter;
}

function istWeiblich($lebewesen)
{
    return $lebewesen['geschlecht'] === 'w';
}
