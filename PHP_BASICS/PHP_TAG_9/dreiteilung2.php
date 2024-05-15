<?php

$browser = $_SERVER['HTTP_USER_AGENT'];
$httpMethod = strtolower($_SERVER['REQUEST_METHOD']);
$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

$server = explode(' ', $_SERVER['SERVER_SOFTWARE']);

?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Systeminfo</title>
</head>

<body>
    <h1>Systeminformation</h1>
    <ul>
        <li>
            Browser:
            <?= $browser; ?>
        </li>
        <li>
            HTTP Method: <?= $httpMethod; ?>
        </li>
        <li>
            Browser Language: <?= $languages[0]; ?>
        </li>

        <li>
            Server-Version: <?= $server[0]; ?>
        </li>
    </ul>
</body>

</html>