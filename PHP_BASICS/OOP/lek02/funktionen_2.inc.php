<?php

function getAllEmployees()
{
    return unserialize(file_get_contents('mitarbeiter.txt'));
}

function getEmployees($gender = NULL)
{
    $employees = getAllEmployees();

    if(isset($gender)) {
/*         $employees = array_filter($employees, function ($employee) use ($gender)
        {
            return $employee['geschlecht'] === $gender;
        }); */
        // kürzer mittels arrow function
        $employees = array_filter($employees, fn ($employee) => $employee['geschlecht'] === $gender);
    }
    return $employees;
}

/* function isFemale($employee)
{
    return $employee['geschlecht'] === 'w';
}
 */