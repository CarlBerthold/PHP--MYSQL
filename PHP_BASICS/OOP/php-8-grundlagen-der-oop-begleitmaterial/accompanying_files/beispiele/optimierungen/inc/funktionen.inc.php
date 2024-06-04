<?php

function autoload($name)
{
    $file = 'src/' . $name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}