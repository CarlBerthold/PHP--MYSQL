<?php

class User 
{
    protected $id = NULL;
    protected $first_name = '';
    protected $last_name = '';
    protected $email = '';
    protected $password = '';
    protected $role = 'user';
    protected $registered_since = '';
    protected $last_modified = '';


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

    public function __set($name, $arguments)
    {
        return $this->setAttributes([$name => $arguments[0]]);
    }

    public function __get($name)
    {
        if(property_exists($this, $name)) {
            return $this->$name;
        }
    }

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