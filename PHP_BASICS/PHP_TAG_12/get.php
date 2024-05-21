<?php
// $_GET is an associative array of variables passed to the current script via the URL parameters.
// The URL parameters are passed through the URL in the form of key-value pairs.
// The URL parameters are separated by the ampersand (&) symbol.
// The URL parameters are passed after the question mark (?) symbol.
// The URL parameters are passed in the form of key-value pairs.
// The key is the name of the variable.
// The value is the value of the variable.
// The key and value are separated by the equal sign (=) symbol.

var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>Superglobale</h1>

    <section>
        <h2>Links mit URL-Query (URL-PARAMETER)</h2>

        <nav>
            <a href="?color=tomate&age=25">Link 1</a>
        </nav>
    </section>
</body>
</html>