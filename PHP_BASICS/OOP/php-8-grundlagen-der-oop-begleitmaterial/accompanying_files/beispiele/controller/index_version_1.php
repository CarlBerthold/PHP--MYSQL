<?php

require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Buch.php';

$action = $_GET['action'] ?? null;
$template = $action;

// TODO: Klassenbasierter Ersatz fuer den Switch

require_once 'templates/' . $template . '.tpl.php';
