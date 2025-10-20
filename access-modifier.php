<?php

class User
{
    protected $name = "John Doe"; // Protected property

    public function getName()
    {
        return $this->name; // Accessing protected property within the class
    }
}

class Admin extends User
{
    public function display()
    {
        echo "Admin Name: " . $this->getName() . "\n"; // Accessing protected property via method in subclass
    }
}

$admin = new Admin(); // Create an instance of Admin
$admin->display(); // Display the admin name

class bankAccount
{
    private $balance = 1000; // Private property

    private function getBalance()
    {
        return $this->balance; // Accessing private property within the class
    }

    public function showBalance()
    {
        return $this->getBalance(); // Accessing private property via public method
    }
}

$account = new bankAccount(); // Create an instance of bankAccount
echo "Account Balance: " . $account->showBalance() . "\n"; // Accessing private property via public method



?>