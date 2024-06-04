<?php

abstract class AbstractBase
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

    public function render404()
    {
        http_response_code(404);
        die('Error 404');
    }

    protected function setTemplate($template, $controller = null)
    {
        if (empty($controller)) {
            $controller = get_class($this);
        }

        $this->template = $controller . '/' . $template . '.tpl.php';
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

        $template = $this->getTemplate();

        require_once 'templates/layout.tpl.php';
    }
}
