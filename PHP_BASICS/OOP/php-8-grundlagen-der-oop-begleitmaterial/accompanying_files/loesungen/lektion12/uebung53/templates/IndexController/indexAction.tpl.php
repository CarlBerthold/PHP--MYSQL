<ul>
    <?php foreach ($buecher as $buch): ?>
        <li>
            <a
                href="index.php?action=zeige&amp;id=<?= (int)$buch->getId() ?>"
            ><?= bereinige($buch->getTitel()) ?></a>
            <br />
            [ <a
                href="index.php?action=loesche&amp;id=<?= (int)$buch->getId() ?>"
            >Lösche</a> ]
        </li>
    <?php endforeach; ?>
</ul>