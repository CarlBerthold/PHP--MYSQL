<?php
$password = '$!§{dq_#+1|1'; // mindestens 8 Zeichen, maximal 15 Zeichen


function validate($value) : string
{
    if (empty($value)) {
        echo 'password should not be empty';
        return 'password should not be empty';
    } else if (strlen($value) < 8) {
        echo 'password should be at least 8 characters long';
        return 'password should be at least 8 characters long';
    } else if (strlen($value) > 15) {
        echo 'password should be at most 15 characters long';
        return 'password should be at most 15 characters long';
    } else {
        echo 'password is valid';
        return 'password is valid';
    }
}

validate($password);
