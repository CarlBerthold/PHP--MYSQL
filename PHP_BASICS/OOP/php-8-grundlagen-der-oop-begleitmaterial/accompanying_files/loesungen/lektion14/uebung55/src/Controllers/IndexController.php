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
        $buch = new Buch();
        
        if ($_POST) {
            $buch->setDaten($_POST);
            $buch->speichere();
            redirect('index.php');
        }

        $this->addContext('buch', $buch);
        $this->setTemplate('bearbeiteAction');
    }

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

    protected function loescheAction()
    {
        $buch = Buch::finde($_GET['id']);
        $buch->loesche();
        redirect('index.php');
    }
}
