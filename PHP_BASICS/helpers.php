<?php



function dump($args) : void
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
}

function dd($args) : void
{
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();
}
