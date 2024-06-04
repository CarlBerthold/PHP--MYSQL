<?php

require_once 'inc/funktionen.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'zeige_buecher':
        $buecher = findeBuecher();
        break;
    case 'zeige_buch':
        $buch = findeBuch(0);
        break;
}

require_once 'templates/' . $action . '.tpl.php';
