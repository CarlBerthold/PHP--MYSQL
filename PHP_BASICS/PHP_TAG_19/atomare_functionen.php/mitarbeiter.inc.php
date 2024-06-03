<?php

function getEmployees($gender = NUll)
{
    $employees = unserialize(file_get_contents('employee.txt'));


    return $employees;
}

function getFemaleEmployees()
{
    $employees = unserialize(file_get_contents('employee.txt'));

    $women = [];
    foreach ($employees as $employee) {
        if ($employee['geschlecht'] === 'w') {
            $women[] = $employee;
        }
    }

    return $women;
}
