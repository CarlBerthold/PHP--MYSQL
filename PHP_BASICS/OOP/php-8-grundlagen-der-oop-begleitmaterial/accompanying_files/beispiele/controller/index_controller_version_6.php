<?php

class IndexText extends AbstractBase
{

    protected function neuBook()
    {
        if ($_POST) {
            $buch = new Buch($_POST);
            $this->addBuch($buch);
            redirect('index.php');
        }
    }
}
