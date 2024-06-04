<?php

trait Deletable
{
    public function loesche()
    {
        $sql = vsprintf(
            'DELETE FROM %s WHERE id = ?',
            [self::ermittleTable()]
        );
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute([$this->getId()]);

        $this->id = 0;
    }
}
