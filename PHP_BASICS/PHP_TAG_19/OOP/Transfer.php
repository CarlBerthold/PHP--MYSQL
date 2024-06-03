<?php


class Transfer
{
    public $name = 'carl';
    public $type = '';
    public $currency = '';

    public $originTax = '';

    public $TotalAmount = 76320;

    public function cashOut(int $tax) : string
    {
        return $this->name . ', you have to pay ' . $tax . $this->currency . ' taxes' . ' heres your caschout : ' . $this->TotalAmount - $tax . $this->currency;
    }
}

// create Object Transer instance
$payment = new Transfer();

// SETTER
$type = $payment->type = 'Creditcard';
$currency = $payment->currency = 'USD';
$tax = $payment->originTax = 200;

//GETTER
echo $transferAmount = $payment->cashOut($tax);
var_dump($payment);