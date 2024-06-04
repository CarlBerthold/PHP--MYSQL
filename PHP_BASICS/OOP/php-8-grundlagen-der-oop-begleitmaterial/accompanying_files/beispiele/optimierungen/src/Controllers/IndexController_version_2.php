<?php

class IndexController extends AbstractBase
{
    protected function bearbeiteAction()
    {
        $buch = Buch::finde($_REQUEST['id']);

        if ($_POST) {
            $buch->setDaten($_POST);
            $buch->speichere();
            redirect('index.php');
        }

        $this->addContext('buch', $buch);
    }

    // die restlichen Methoden wurden hier aus Platzgruenden entfernt
}
