<?php

require_once 'inc/datenbank.inc.php';

// falls die Tabelle schon existiert, wegräumen
$db->query('DROP TABLE IF EXISTS buecher');

$db->query(
    'CREATE TABLE buecher (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        preis DECIMAL(6,2)
    ) DEFAULT CHARSET = utf8'
);

$db->query(
    'INSERT INTO buecher (titel, preis) VALUES
        ("Der Graf von Monte Christo", 9.95),
        ("Total Recall", 7.95)
    '
);
