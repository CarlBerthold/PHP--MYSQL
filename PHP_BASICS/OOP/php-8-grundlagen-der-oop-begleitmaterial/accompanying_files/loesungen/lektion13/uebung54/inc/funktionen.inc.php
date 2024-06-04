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

function bereinige($benutzerEingabe, $encoding = 'UTF-8')
{
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}
