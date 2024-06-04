<?php

class IndexController extends AbstractBase
{
    protected function indexAction()
    {
        $this->addContext('buecher', findeBuecher());
    }

    protected function zeigeAction()
    {
        $this->addContext('buch', findeBuch($_GET['id']));
    }

    protected function neuAction()
    {
        if ($_POST) {
            $buch = new Buch($_POST);
            speichereBuch($buch);
            redirect('index.php');
        }
    }
}
