<?php

require_once 'inc/funktionen.inc.php';
require_once 'inc/emulator.inc.php';
require_once 'src/Entities/Buch.php';

$buecher = findeBuecher();

require_once 'templates/zeige_buecher.tpl.php';
