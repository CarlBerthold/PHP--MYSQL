<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Eintrag anlegen</title>
</head>

<body>
    <?php require 'navi.tpl.php'; ?>

    <form action="index.php?action=neu" method="post">
        <input type="text" name="titel" id="titel" placeholder="Titel" />
        <input type="text" name="preis" id="preis" placeholder="Preis" />
        <input type="submit" value="speichern" />
    </form>
</body>

</html>