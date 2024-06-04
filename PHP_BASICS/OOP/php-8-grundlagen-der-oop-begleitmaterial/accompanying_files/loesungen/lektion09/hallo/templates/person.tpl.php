<div class="person_box">
    <p>
        <?= bereinige($person->getName()) ?><br />
        <?= bereinige($person->getStrasse()) ?><br />
        <?= bereinige($person->getPlz()) ?> <?= bereinige( $person->getOrt()) ?><br />
        <?= bereinige($person->getEmail()) ?>
    </p>
</div>