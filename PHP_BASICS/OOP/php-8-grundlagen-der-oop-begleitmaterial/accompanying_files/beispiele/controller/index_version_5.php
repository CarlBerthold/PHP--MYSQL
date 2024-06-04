<?php

require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$controller = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = 'src/Controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;

    $requestController = new $controllerName();
    $requestController->run($action);
}
