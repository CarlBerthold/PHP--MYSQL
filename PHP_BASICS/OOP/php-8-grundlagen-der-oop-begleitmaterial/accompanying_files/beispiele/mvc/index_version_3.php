<?php

require_once 'inc/funktionen.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$action = $_GET['action'] ?? null;
$template = $action;

switch ($action) {
    case 'zeige_buecher':
        $buecher = findeBuecher();
        break;
    case 'zeige_buch':
        $buch = findeBuch(0);
        break;
    default:
        $buecher = findeBuecher();
        $template = 'zeige_buecher';
        break;
}

require_once 'templates/' . $template . '.tpl.php';
