<?php

class User
{
    protected $firstname = '';
    protected $lastname = '';
    protected $password = '';
    protected $role = 'guest';
    protected $salutation = '';
    protected $greeting = 'Hallo';
    // protected $fullname = ''; # ist jetzt ein virtuelle Attribut

    # Getter und Setter
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }



    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    protected function getPassword() // das Passwort soll nicht auslesbar sein
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    
    /**
     * Get the value of salutation
     */ 
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set the value of salutation
     *
     * @return  self
     */ 
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get the value of greeting
     */ 
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * Set the value of greeting
     *
     * @return  self
     */ 
    public function setGreeting($greeting)
    {
        $this->greeting = $greeting;

        return $this;
    }

    # Setter und Getter für das virtuelle Attribut fullname

    /**
     * Get the value of fullname
     */ 
    public function getFullname()
    {
        $fullname = $this->getFirstname() . ' ' . $this->getLastname();
        return $fullname;
    }

    /**
     * Set the value of fullname
     *
     * @return  self
     */ 
    public function setFullname($firstname, $lastname)
    {
        // $this->fullname = $firstname . ' ' . $lastname;
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        return $this;
    }

    # weiteres virtuelle Attribut - welcome
    public function getWelcome()
    {
        $welcome = $this->greeting . ' ';
        $welcome.= $this->salutation . ' ';
        $welcome.= $this->getFullname();

        return $welcome;
    } 

    # eigene Methoden
    public function verifyPassword($password)
    {
        // $result = password_verify($password, $this->getPassword()); // äquivalent
        $result = password_verify($password, $this->password);

        return $result;
    }



}