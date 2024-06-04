<?php

class IndexController extends AbstractBase
{
    protected function indexAction()
    {
        $this->addContext('buecher', Buch::findeAlle());
    }

    protected function zeigeAction()
    {
        $this->addContext('buch', Buch::finde($_GET['id']));
    }

    protected function neuAction()
    {
        if ($_POST) {
            $buch = new Buch($_POST);
            $buch->speichere();
            redirect('index.php');
        }
    }
}
