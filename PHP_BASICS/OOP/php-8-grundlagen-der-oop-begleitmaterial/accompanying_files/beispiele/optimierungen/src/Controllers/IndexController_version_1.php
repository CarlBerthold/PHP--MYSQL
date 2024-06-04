<?php

class IndexController extends AbstractBase
{
    protected function neuAction()
    {
        $buch = new Buch();

        if ($_POST) {
            $buch->setDaten($_POST);
            $buch->speichere();
            redirect('index.php');
        }

        $this->addContext('buch', $buch);
        $this->setTemplate('bearbeiteAction');
    }

    // die restlichen Methoden wurden hier aus Platzgruenden entfernt
}
