<?php

require_once 'inc/funktionen.inc.php';

spl_autoload_register('autoloadControllers');
spl_autoload_register('autoloadEntities');
spl_autoload_register('autoloadTraits');

require_once 'inc/datenbank.inc.php';

Buch::verbindeZuDb($db);

$controller = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';

if (class_exists($controllerName)) {
    $requestController = new $controllerName();
    $requestController->run($action);
} else {
    $requestController = new IndexController();
    $requestController->render404();
}
