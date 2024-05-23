<?php

function sum($value1 = 0, $value2 = 0)
{
    return $value1 + $value2;
}

function subtract($value1 = 0, $value2 = 0)
{
    return $value1 - $value2;
}

function multiply($value1 = 1, $value2 = 1)
{
    return $value1 * $value2;
}

function divide($value1 = 1, $value2 = 1)
{
    if($value1 == 0 || $value2 == 0)
    {
        return 'Cannot divide by zero';
    } else {
        return $value1 / $value2;
    }
}
