<form action="index.php?action=<?= bereinige($action) ?>" method="post">
    <input
        type="hidden" name="id"
        value="<?= (int)$buch->getId() ?>"
    />
    <input
        type="text" name="titel" id="titel" placeholder="Titel"
        value="<?= bereinige($buch->getTitel()) ?>"
    />
    <input
        type="text" name="preis" id="preis" placeholder="Preis"
        value="<?= (float)$buch->getPreis() ?>"
    />
    <input type="submit" value="speichern" />
</form>