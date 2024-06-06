<?php



class Kurs 
{
    protected $name = 'PHP';

    public function __invoke(string $message = '')
    {
        return (!empty($message)) ? $message : 'i am the method invoke';
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}


$test = new Kurs();

var_dump($test);