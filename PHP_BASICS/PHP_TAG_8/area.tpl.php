<h3><?= $areaName ?></h3>
<ul>
    <?php foreach ($area as $typeName => $type) : ?>
        <?php require 'templates/type.tpl.php'; ?>
    <?php endforeach; ?>
</ul>