<?php

class IndexController
{
    protected $context = [];
    protected $template = '';

    public function run($action)
    {
        $this->addContext('action', $action);

        $methodName = $action . 'Action';
        $this->setTemplate($methodName);

        if (method_exists($this, $methodName)) {
            $this->$methodName();
        }

        $this->render();
    }

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
