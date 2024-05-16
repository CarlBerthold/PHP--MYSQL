<li>
    <?= $typeName ?>
    <ul>
        <?php foreach ($type as $experienceName => $experience) : ?>
            <?php require 'templates/experience.tpl.php'; ?>
        <?php endforeach; ?>
    </ul>
</li>