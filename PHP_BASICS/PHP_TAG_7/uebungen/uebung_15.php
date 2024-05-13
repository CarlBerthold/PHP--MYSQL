<?php

function isEven(int $number) : void
{
    if(($number % 2) === 0) {
        echo 'The number is even', PHP_EOL;
    } else {
        echo 'The number is odd', PHP_EOL;
    }
    
}

isEven(3.5);