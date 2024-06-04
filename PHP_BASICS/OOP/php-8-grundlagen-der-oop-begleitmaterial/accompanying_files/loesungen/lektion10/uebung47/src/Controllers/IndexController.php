<?php

class IndexController extends AbstractBase
{
    protected function indexAction()
    {
        $adresse = new Adresse();
        $adresse->setStrasse('Musterstrasse 7');
        $adresse->setPlz('90411');
        $adresse->setOrt('Musterstadt');

        $person = new Person();
        $person->setName('Max Muster');
        $person->setEmail('max@example.com');
        $person->setAdresse($adresse);

        $this->addContext('person', $person);
    }
}
