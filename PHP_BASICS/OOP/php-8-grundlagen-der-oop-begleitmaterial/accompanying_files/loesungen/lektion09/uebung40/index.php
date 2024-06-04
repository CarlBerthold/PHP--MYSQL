<?php

require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$action = $_GET['action'] ?? null;
$template = $action;

switch ($action) {
    case 'neu':
        break;
    case 'zeige':
        $buch = findeBuch($_GET['id']);
        break;
    default:
        $buecher = findeBuecher();
        $template = 'liste';
        break;
}

require_once 'templates/' . $template . '.tpl.php';
