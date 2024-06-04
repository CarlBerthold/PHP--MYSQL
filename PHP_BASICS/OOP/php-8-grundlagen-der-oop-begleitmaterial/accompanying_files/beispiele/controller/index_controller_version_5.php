<?php

class IndexController
{
    protected $context = [];
    protected $template = '';

    // gekuerztes Beispiel

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

        require_once 'templates/' . $this->getTemplate();
    }
}
