<?php

trait Findable
{
    public static function findeAlle()
    {
        $sql = vsprintf(
            'SELECT * FROM %s',
            [self::ermittleTable()]
        );
        $abfrage = self::$db->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, get_class());

        return $abfrage->fetchAll();
    }
    
    public static function finde($id)
    {
        $sql = vsprintf(
            'SELECT * FROM %s WHERE id = ?',
            [self::ermittleTable()]
        );
        $abfrage = self::$db->prepare($sql);
        $abfrage->execute([$id]);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, get_class());

        return $abfrage->fetch();
    }
}
