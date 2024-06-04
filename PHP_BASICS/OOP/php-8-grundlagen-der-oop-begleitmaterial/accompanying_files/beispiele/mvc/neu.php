<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eintrag anlegen</title>
</head>

<body>
    <ul id="navi">
        <li><a href="liste.php">Startseite</a></li>
        <li><a href="neu.php">Buch anlegen</a></li>
    </ul>

    <form action="neu.php" method="post">
        <input type="text" name="titel" id="titel" placeholder="Titel" />
        <input type="text" name="preis" id="preis" placeholder="Preis" />
        <input type="submit" value="speichern" />
    </form>
</body>

</html>