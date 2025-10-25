<?php

abstract class PaymentGateway
{
    abstract public function pay($amount);
}

class Bkash extends PaymentGateway
{
    public function pay($amount)
    {
        return "Paid {$amount} using Bkash. \n";
    }
}

class Nagad extends PaymentGateway
{
    public function pay($amount)
    {
        return "Paid {$amount} using Nagad. \n";
    }
}

$bkash = new Bkash();
echo $bkash->pay(6000);

$nagad = new Nagad();
echo $nagad->pay(7000);




?>