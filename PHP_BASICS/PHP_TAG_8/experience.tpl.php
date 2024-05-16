<?php if (is_array($experience)) : ?>
    <li>
        <?= $experienceName ?>
        <ul>
            <?php foreach ($experience as $subExperienceName => $subExperience) : ?>
                <?php require 'templates/subexperience.tpl.php'; ?>
            <?php endforeach; ?>
        </ul>
    </li>
<?php else : ?>
    <li>
        <?= $experienceName  . ': ' . $experience ?>
    </li>
<?php endif; ?>