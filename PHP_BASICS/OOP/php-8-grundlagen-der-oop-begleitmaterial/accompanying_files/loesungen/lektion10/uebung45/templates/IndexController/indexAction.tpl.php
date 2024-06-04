<ul>
    <?php foreach ($buecher as $id => $buch): ?>
        <li>
            <a
                href="index.php?action=zeige&amp;id=<?= (int)$id ?>"
            ><?= bereinige($buch->getTitel()) ?></a>
        </li>
    <?php endforeach; ?>
</ul>