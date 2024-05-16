<?php if (is_array($subExperience)) : ?>
    <?php if (!empty($subExperience)) : ?>
        <li>
            <?= $subExperienceName ?>
            <ul>
                <?php foreach ($subExperience as $subExperienceKey => $subExperienceValue) : ?>
                    <li>
                        <?= $subExperienceValue ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endif; ?>
<?php else : ?>
    <li>
        <?= (is_string($subExperienceName) ? $subExperienceName . ': ' : '')  . $subExperience ?>
    </li>
<?php endif; ?>