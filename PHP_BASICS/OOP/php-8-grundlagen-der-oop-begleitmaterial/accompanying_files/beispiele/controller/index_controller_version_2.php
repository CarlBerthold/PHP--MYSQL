<?php

class IndexController
{
    protected $template = '';

    public function indexAction()
    {
        $buecher = findeBuecher();

        $this->setTemplate('liste');
        $this->render();
    }

    public function zeigeAction()
    {
        $buch = findeBuch($_GET['id']);

        $this->setTemplate('zeige');
        $this->render();
    }

    public function neuAction()
    {
        if ($_POST) {
            $buch = new Buch($_POST);
            speichereBuch($buch);
            redirect('index.php');
        }

        $this->setTemplate('neu');
        $this->render();
    }

    protected function setTemplate($template)
    {
        $this->template = $template . '.tpl.php';
    }

    protected function getTemplate()
    {
        return $this->template;
    }

    protected function render()
    {
        require_once 'templates/' . $this->getTemplate();
    }
}
