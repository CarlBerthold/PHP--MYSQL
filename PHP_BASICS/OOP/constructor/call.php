<?php



class Test 
{
    protected $attr1, $attr2, $attr3;#

    public function __call($name, $arguments)
    {
        switch($name) {
            case 'getAttributsAsString':
                return implode(', ', get_object_vars($this));
            case 'setAttributs':
                $this->attr1 = $arguments[0];
                $this->attr2 = $arguments[1];
                $this->attr3 = $arguments[2];
                
                return $this;
            case 'topSecretMethod':
                return $this->topSecretMethod();
            
                default:
                return 'Method not found';
        }
    }

    private function topSecretMethod()
    {
        return $message = 'tpoSecret';
    }
}


$test = new Test();
echo $test->setAttributes();
echo $test->getAttributesAsString(), PHP_EOL;
