<?php

function getEmployees()
{
    $employees = unserialize(file_get_contents('mitarbeiter.txt'));

    return $employees;
}

# wird nicht mehr benötigt, da via anonymer Funktion umgesetzt
/* function isFemale($employee)
{
    return $employee['geschlecht'] === 'w';
}
 */