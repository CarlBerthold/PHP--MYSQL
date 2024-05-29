<?php


$dbName = 'dbname=seminarverwaltung';
$dns = "mysql:host=localhost;" . "$dbName";


$name = 'root';
$pw = 'carl';

// returns a PDO object and reference it to $db
$db = new PDO($dns, $name, $pw, 
[ 
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH, // default
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM, // gibt beim Fetchen ein numerische indiziertes Array zurück
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // gibt beim Fetchen ein assoziatives Array zurück


    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // default - PHP wirft einen Fehler, wenn ein SQL-Fehler aufgetreten ist
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // PHP gibt nur eine Warning aus, wenn ein SQL-Fehler aufgetreten ist
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT, // es wird keine Warning oder Exeption in PHP geworfen, wenn ein SQL-Fehler aufgetreten ist
]
);

$pdoStatement = $db->query("SELECT * FROM users WHERE salutation = 'mr'");


/**
 * Fetches and prints the data from a PDO statement until there is no more data.
 *
 * @param PDOStatement $pdoStatement The PDO statement object.
 * @return void
 */
do {
    $data = $pdoStatement->fetch();
    if ($data !== false) {
        // implode the array to a string with the seperator ', ' and add a new line
        echo implode(', ', $data) . PHP_EOL;
    }
    // if there is no more data in the database it will return false
} while ($data !== false);

while (($user = $PDOStatement->fetch()) !== false) {
    echo "{$user['anrede']} {$user['vorname']} {$user['name']}\n";
}




// save the query string in a variabel so we can use it in the prepared statement fetchAll()
$pdoStatement = $db->query("SELECT * FROM users WHERE salutation = 'mr'");

// returning all the data from the database with the querystring and save it in the $data variable
$data = $pdoStatement->fetch();


// reuturns the PDO object with the connection to the database
// the object holds no data
// var_dump($data);


