<?php

# aus Workshop Lektion 12

# Session starten
session_start();

$userData = [
    [
        'name' => 'Oli',
        'loginname' => 'oliver.vogt@d-taube.de',
        'password' => 'ganzgeheim', // absolutes no-go - Passwörter dürfen nie nie nie in Klartext verfügbar sein
    ],
    [
        'name' => 'Hans',
        'loginname' => 'hans@wurst.de',
        'password' => 'Pa$$w0rd', // absolutes no-go - Passwörter dürfen nie nie nie in Klartext verfügbar sein
    ],
];


$loginNames = array_column($userData, 'password', 'loginname');

if ($_POST) {
    if (array_key_exists($_POST['loginname'], $loginNames) && $_POST['password'] === $loginNames[$_POST['loginname']]) {
        $_SESSION['loggedin'] = TRUE;
        # Benutzernamen auslesen - z. Z. aufwändiger, das liegt an unserer Vorgehensweise und auch der Datenstruktur
/*         var_dump(array_reduce($userData, function ($carry, $user) {
            return ($user['loginname'] === $_POST['loginname']) ? $user['name'] : $carry;
        }));  */
        # Refactoring - mit arrow function
        var_dump(array_reduce($userData, fn ($carry, $user) => ($user['loginname'] === $_POST['loginname']) ? $user['name'] : $carry)); 

        $_SESSION['name'] = array_reduce($userData, fn ($carry, $user) => ($user['loginname'] === $_POST['loginname']) ? $user['name'] : $carry);
        // aus Sicherheitsgründen neue Session-Id vergeben
        session_regenerate_id();
        header('Location: loggedin.php', TRUE, 307);
        exit;
    }

    $message = 'Die Kombination Benutzername und Kennwort stimmen nicht überein!';
}

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="loginname">Loginname: </label>
            <!-- <input type="text" name="loginname" id="loginname" placeholder="Bitte den Loginnamen eingeben" value="<?= (isset($_POST['loginname'])) ? $_POST['loginname'] : '' ?>" required> -->
            <input type="text" name="loginname" id="loginname" placeholder="Bitte den Loginnamen eingeben" value="<?= $_POST['loginname'] ?? '' ?>" required>
        </div>
        <div>
            <label for="password">Passwort: </label>
            <input type="password" name="password" id="password" placeholder="Bitte das Passwort eingeben" value="<?= $_POST['password'] ?? '' ?>" required>
        </div>
        <div>
            <button type="submit">anmelden</button>
        </div>
        <?php if (isset($message)) : ?>
            <p>
                <?= $message ?>
            </p>
        <?php endif; ?>
    </form>
</body>

</html>