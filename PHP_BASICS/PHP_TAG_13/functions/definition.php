<?php

// keyword function
function doIt() {
    echo 'Doing it';
}

$doIt = function() {
    echo 'Doing it';
};


var_dump($doIt);

doIt();