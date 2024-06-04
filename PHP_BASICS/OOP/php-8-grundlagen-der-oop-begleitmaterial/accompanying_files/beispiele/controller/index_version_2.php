<?php

require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

require_once 'src/Controllers/IndexController.php';
$requestController = new IndexController();

$action = $_GET['action'] ?? 'index';
$template = $action;
$methodName = $action . 'Action';

if (method_exists($requestController, $methodName)) {
    $requestController->$methodName();
}

require_once 'templates/' . $template . '.tpl.php';
