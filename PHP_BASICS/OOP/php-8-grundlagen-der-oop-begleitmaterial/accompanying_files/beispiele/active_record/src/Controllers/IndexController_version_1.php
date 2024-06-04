<?php

class IndexController extends AbstractBase
{
    protected function indexAction()
    {
        $this->addContext('buecher', Buch::findeAlle());
    }

    // die restlichen Methoden wurden hier aus Platzgruenden entfernt
}
