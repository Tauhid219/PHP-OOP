<?php

// Abstract Class

abstract class Vehicle
{
    abstract public function drive();
}

class Car extends Vehicle
{
    public function drive()
    {
        return "The car is driving.";
    }
}

class Bike extends Vehicle
{
    public function drive()
    {
        return "The bike is riding.";
    }
}

$car = new Car();
echo $car->drive() . "\n";

$bike = new Bike();
echo $bike->drive() . "\n";


abstract class PaymentGateway
{
    abstract public function pay($amount);
}

class Bkash extends PaymentGateway
{
    public function pay($amount)
    {
        return "Paid {$amount} using Bkash.";
    }
}

class Nagad extends PaymentGateway
{
    public function pay($amount)
    {
        return "Paid {$amount} using Nagad.";
    }
}

$bkashPayment = new Bkash();
echo $bkashPayment->pay(500) . "\n";

$nagadPayment = new Nagad();
echo $nagadPayment->pay(600) . "\n";

?>