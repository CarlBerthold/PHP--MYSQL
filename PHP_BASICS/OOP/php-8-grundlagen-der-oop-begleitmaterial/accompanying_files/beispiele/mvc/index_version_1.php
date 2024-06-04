<?php

require_once 'inc/funktionen.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'zeige_buecher':
        $buecher = findeBuecher();
        require_once 'templates/zeige_buecher.tpl.php';
        break;
    case 'zeige_buch':
        $buch = findeBuch(0);
        require_once 'templates/zeige_buch.tpl.php';
        break;
}
