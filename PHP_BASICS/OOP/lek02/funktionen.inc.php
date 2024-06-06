<?php

function getEmployees()
{
    $employees = unserialize(file_get_contents('mitarbeiter.txt'));

    return $employees;
}

function isFemale($employee)
{
    return $employee['geschlecht'] === 'w';
}
