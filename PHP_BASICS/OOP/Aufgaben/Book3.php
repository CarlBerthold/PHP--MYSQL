<?php

class Book
{
    protected string $title = '';
    protected string $description = '';
    protected string $author = '';
    protected string $genre = '';
    protected float $netPrice;
    protected array $tax = [7, 19]; // könnte auch über Konstanten realisiert werden
    protected bool $ebook = false;

    public function __construct(array $data = [])
    {
        if($data) $this->setAttributes($data);
    }

    public function setAttributes(array $data = []) 
    {
        if($data) {
            foreach($data as $key => $value) {

                $setterName = 'set' . ucfirst($key);
                if(method_exists($this, $setterName)) {
                    $this->$setterName($value);
                } else if(property_exists($this, $key)) {
                    $this->$key = $value ?? new Exception('Value is missing');
                }
            }   
        }   
    }

    public function getAttributes($data) 
    {
        $data = get_object_vars($this);

        $data['tax'] = $this->getTax();

        return $data;
    }

    public function __call($name, $arguments)
    {

        //OLI

        if(str_starts_with($name, 'get')) {
            $attribute = lcfirst(substr($name, 3));
            if(property_exists($this, $attribute)) {
                return $this->$attribute;
            } else {
                throw new Exception('Property ' . $attribute . ' does not exist');
            }
        }

        if(str_starts_with($name, 'set')) {
            $attribute = lcfirst(substr($name, 3));
            if(property_exists($this, $attribute)) {
                $this->$attribute = $arguments[0];
            } else {
                throw new Exception('Property ' . $attribute . ' does not exist');
            }

            return $this;
        }
    }
   

    # Getter und Setter für virtuelles Attribut $grossPrice
    public function getGrossPrice()
    {
        return round($this->netPrice * (1 + $this->tax[(int) $this->ebook] / 100), 2);
    }

    public function setGrossPrice($grossPrice)
    {
        $this->netPrice = round($grossPrice / (1 + $this->tax[(int) $this->ebook] / 100), 2);

        return $this;
    }

    /**
     * Get the value of tax
     */ 
    public function getTax()
    {
        return $this->ebook ? $this->tax[1] : $this->tax[0];
    }
}

$book = new Book(
    [
        'title' => 'PHP 8 - Der Einstieg in die moderne Webentwicklung',
        'description' => 'PHP ist eine der beliebtesten Programmiersprachen der Welt und wird für die Entwicklung dynamischer Webseiten und Webanwendungen verwendet.',
        'author' => 'Thomas Theis',
        'genre' => 'Fachbuch',
        'netPrice' => 29.95,
        'ebook' => false,
    ]
);

//var_dump($book);

//var_dump($book->setTitle('hello'));
//var_dump($book->getTitle());
var_dump($book->getTax());