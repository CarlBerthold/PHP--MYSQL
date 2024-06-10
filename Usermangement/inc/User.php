<?php


class Authentication
{

    protected $password = '';
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password)
    {
        // $result = password_verify($password, $this->getPassword()); // äquivalent
        $result = password_verify($password, $this->password);

        return $result;
    }

}

class User extends Authentication
{
    protected string $firstname = '';
    protected string $lastname = '';
    protected string $email = '';
    //
    protected string $role = 'user';
    protected string $createdAt = '';
    protected string $updatedAt = '';

    // public function getPassword($password);

    # CONSTRUCT
    public function __construct(array $data = [])
    {
        if($data) $this->setAttributes($data);
    }


    # build SETTER
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

    # build GETTER
    public function getAttributes($data) 
    {
        $data = get_object_vars($this);

        $data['tax'] = $this->getTax();

        return $data;
    }

    # Magic Methods
    // __call() is triggered when invoking inaccessible methods in an object context.
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

    // __set() is run when writing data to inaccessible properties.
    public function __set($name, $arguments)
    {
        return $this->setAttributes([$name => $arguments[0]]);
    }

    // __get() is utilized for reading data from inaccessible properties.
    public function __get($name)
    {
        if(property_exists($this, $name)) {
            return $this->$name;
        }
    }
}







/* $carl = new User();
$setPassword = $carl->setPassword('15456');
// echo $password;
var_dump($setPassword);
 */
/* $auth = new Authentication();
$user = new User();
$auth->setPassword('15456');
$result = $auth->verifyPassword('15456', $user->password);
var_dump($result);
 */

 $auth = new Authentication();
    $user = new User();
    /* $user->setPassword('15456');
    $isVerified = $user->verifyPassword('15456');
    var_dump($user);
    echo $isVerified ? 'Password is correct' : 'Password is incorrect'; */

    $auth->setPassword('15456');
    $isVerified = $auth->verifyPassword('15456');
    var_dump($auth);
    echo $isVerified ? 'Password is correct' : 'Password is incorrect';

   