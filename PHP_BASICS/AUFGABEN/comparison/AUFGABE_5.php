<?php
$password = '$!§{dq_#+1|1'; // mindestens 8 Zeichen, maximal 15 Zeichen


function validate($value) : string
{
    if (empty($value)) {
        echo 'Passwort darf nicht leer sein';
        return 'Passwort darf nicht leer sein';
    } else if (strlen($value) < 8) {
        echo 'Passwort muss mindestens 8 Zeichen lang sein';
        return 'Passwort muss mindestens 8 Zeichen lang sein';
    } else if (strlen($value) > 15) {
        echo 'Passwort darf maximal 15 Zeichen lang sein';
        return 'Passwort darf maximal 15 Zeichen lang sein';
    } else {
        echo 'Passwort ist gültig';
        return 'Passwort ist gültig';
    }
}

validate($password);
