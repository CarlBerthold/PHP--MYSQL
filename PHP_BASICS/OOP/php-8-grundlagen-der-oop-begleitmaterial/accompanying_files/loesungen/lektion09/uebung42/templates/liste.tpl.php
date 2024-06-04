<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Buch anzeigen</title>
</head>

<body>
    <?php require 'navi.tpl.php'; ?>

    <ul>
        <?php foreach ($buecher as $id => $buch): ?>
            <li>
                <a
                    href="index.php?action=zeige&amp;id=<?= (int)$id ?>"
                ><?= bereinige($buch->getTitel()) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>