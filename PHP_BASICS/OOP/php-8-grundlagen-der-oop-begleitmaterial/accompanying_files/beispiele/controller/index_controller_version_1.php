<?php

class IndexController
{
    public function indexAction()
    {
        $buecher = findeBuecher();
        $template = 'liste';
    }

    public function zeigeAction()
    {
        $buch = findeBuch($_GET['id']);
    }

    public function neuAction()
    {
        if ($_POST) {
            $buch = new Buch($_POST);
            speichereBuch($buch);
            redirect('index.php');
        }
    }
}
