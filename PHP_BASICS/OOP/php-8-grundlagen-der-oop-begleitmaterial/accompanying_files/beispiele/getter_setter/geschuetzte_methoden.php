<?php

class GeschuetzteMethoden
{
    public function ichBinOeffentlich()
    {
        return 'Auf mich kann man von außen zugreifen.';
    }

    protected function ichBinGeschuetzt()
    {
        return 'Ich bin die geschuetzte Methode.';
    }
}

$test = new GeschuetzteMethoden();

echo $test->ichBinOeffentlich();
echo $test->ichBinGeschuetzt(); // Hier wird von PHP ein Error erzeugt
