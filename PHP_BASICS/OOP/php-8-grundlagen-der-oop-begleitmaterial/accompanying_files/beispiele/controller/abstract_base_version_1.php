<?php

abstract class AbstractBase
{
    protected $books = [];
    protected $text = '';

   

    protected function setText($text)
    {
 

        $this->text = $text;
    }


    protected function addBook($value)
    {
        $this->books[] = $value;
    }

 
}
