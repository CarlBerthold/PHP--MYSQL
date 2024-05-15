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
            <?php echo '<pre';?>
            <?php var_dump($_SERVER); ?>

        </li>
        <li>
            HTTP Method: <?php echo strtolower($_SERVER['REQUEST_METHOD']); ?>
        </li>

        <li>
            <?php

            $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

            ?>
            Browser Language: <?php var_dump($languages); ?>
        </li>
        <li>
            <?php

            $server = explode(' ', $_SERVER['SERVER_SOFTWARE']);

            ?>
            Server-Version: <?php echo $server[0]; ?>
        </li>
    </ul>
</body>

</html>