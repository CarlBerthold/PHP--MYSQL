<?php

class Account
{
    public string $accountNumber = '0156789234';

    public string $currency = 'EUR';

    public bool $inUse = True;

    public string $creditor = '';

    public float $balance = 0;

    public function greetCreditor($name = '') : string
    {
        return 'hello ' . $name;
    }
}

$account = new Account();
//var_dump($account);

$number = $account->accountNumber = "8923401567";
$currency = $account->currency = 'YEN';
$creditor = $account->creditor = 'Gloria';
$balance = $account->balance = 1000000000;
$greeting = $account->greetCreditor($creditor);

//var_dump();
echo $greeting;
//var_dump();