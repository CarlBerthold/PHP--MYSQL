<?php

function autoloadControllers($controllerName)
{
    $controllerFile = 'src/Controllers/' . $controllerName . '.php';
    if (file_exists($controllerFile)) {
        require_once $controllerFile;
    }
}

function autoloadEntities($entityName)
{
    $entityFile = 'src/Entities/' . $entityName . '.php';
    if (file_exists($entityFile)) {
        require_once $entityFile;
    }
}

function autoloadTraits($traitName)
{
    $traitFile = 'src/Traits/' . $traitName . '.php';
    if (file_exists($traitFile)) {
        require_once $traitFile;
    }
}

// die restlichen Funktionen wurden hier aus Platzgruenden entfernt
