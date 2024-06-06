<?php

# abweichend von Bsp. WBT mit englischen Bezeichner

function getEmployees()
{
    $employees = unserialize(file_get_contents('mitarbeiter.txt'));

    return $employees;
}

function getFemaleEmployees()
{
    $employees = unserialize(file_get_contents('mitarbeiter.txt'));

    $women = [];
    foreach ($employees as $employee) {
        if ($employee['geschlecht'] === 'w') {
            $women[] = $employee;
        }
    }

    return $women;
}
