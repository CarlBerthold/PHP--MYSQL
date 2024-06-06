<?php

class Book 
{
    protected $title = '';
    
    protected $description = '';

    protected $auhtor = '';

    protected $genre = '';

    protected $price = Null;
    
    
    
    //GETTER
    public function getTitle() 
    {
        return $this->title ;
    }
    public function getDescription() 
    {
        return $this->description;
    }
    public function getAuthor() 
    {
        return $this->auhtor ;
    }
    public function getGenre() 
    {
        return $this->genre ;
    }
    public function getPrice($netto = false, $brutto = true) 
    {
        if($brutto && !$netto) {
            return $this->price;
        }

        if($netto) {
            return $this->getNettoPrice($this->price);
        }
       
    }
    //SETTER
    public function setTitle(string $value) :  object 
    {
        $this->title = $value;
        return $this;
    }
    public function setDescription(string $value) : object 
    {
        $this->description = $value;
        return $this;
    }

    public function setAuthor(string $value) :object 
    {
        $this->auhtor = $value;
        return $this;
    }
    public function setGenre(string $value) :  object 
    {
        $this->genre = $value;
        return $this;
    }
    public function setPrice(int|float $value) : int|float|object
    {
        $this->price = $value * 1.19;
        return $this;
    }


    // METHODS
    protected function getNettoPrice($price) 
    {
        $price = $this->price - ($this->price * 0.19);
        return $price;
    }
}

// Create a new Book 
$theManifest = new Book();
$title = $theManifest->setTitle('Per Anhalter durch die Galaxy');
$description = $theManifest->setDescription('Per Anhalter durch die Galaxis, Originaltitel The Hitchhiker’s Guide to the Galaxy,...');
$author = $theManifest->setAuthor('Douglas Adams');
$genre = $theManifest->setGenre('comedy');
$price = $theManifest->setPrice(5.00);

var_Dump($theManifest);

$title = $theManifest->getTitle();
$description = $theManifest->getDescription();
$author = $theManifest->getAuthor();
$genre = $theManifest->getGenre();
$price = $theManifest->getPrice(true, false);

var_dump($title, $description, $author, $genre, $price);
