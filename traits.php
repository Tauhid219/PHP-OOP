<?php

trait Logger
{
    public function log($message)
    {
        echo "Log: " . $message . "\n";
    }
}

class Product
{
    use Logger;

    public function create()
    {
        $this->log("Product created.");
    }
}

class Order
{
    use Logger;

    public function place()
    {
        $this->log("Order placed.");
    }
}

$product = new Product();
$product->create();

$order = new Order();
$order->place();




?>