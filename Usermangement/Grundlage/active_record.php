<?php

require_once __DIR__ . '/inc/User.php';
require_once __DIR__ . '/inc/database.inc.php';

### Aufgabenstellung - Herausforderung
/* Methoden delete und destroy implementieren

Motivation: mit delete wollen wir eine Instanz löschen (über die Instanz) und mit destroy wollen wir einen Datensatz löschen über einen statisch Aufruf unter Angabe der Id
 */

## Datenbankverbindung herstellen
$db = connectDB();

## Datenbankverbindung an die User-Klasse binden
User::setDb($db);

## eine bestehende Instanz löschen

$oli = User::find(13);
// irgendwelche Aktionen, z. B. Daten exportiern o. ä.
// Datensatz löschen
$oli->delete();

## ein Datensatz anhand einer id löschen

User::destroy(14);








