<?php

class IndexController
{
    protected $context = [];
    protected $template = '';

    public function indexAction()
    {
        $this->addContext('buecher', findeBuecher());

        $this->setTemplate('liste');
        $this->render();
    }

    public function zeigeAction()
    {
        $this->addContext('buch', findeBuch($_GET['id']));

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

    protected function addContext($key, $value)
    {
        $this->context[$key] = $value;
    }

    protected function render()
    {
        extract($this->context);

        require_once 'templates/' . $this->getTemplate();
    }
}
