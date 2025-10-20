<?php

// encapsulation example
class BankAccount
{
    private $accountNumber; // Private property
    private $balance; // Private property

    public function __construct($accountNumber, $initialBalance) // Constructor
    {
        $this->accountNumber = $accountNumber; // Initialize account number
        $this->balance = $initialBalance; // Initialize balance
    }

    public function deposit($amount) // Public method to deposit money
    {
        if ($amount > 0) { // Validate amount
            $this->balance += $amount; // Update balance
            echo "Deposited: $$amount\n"; // Confirmation message
        } else { // Invalid amount
            echo "Deposit amount must be positive.\n"; // Error message
        }
    }

    public function withdraw($amount) // Public method to withdraw money
    {
        if ($amount > 0 && $amount <= $this->balance) { // Validate amount
            $this->balance -= $amount; // Update balance
            echo "Withdrew: $$amount\n"; // Confirmation message
        } else { // Invalid amount or insufficient balance
            echo "Insufficient balance or invalid withdrawal amount.\n"; // Error message
        }
    }

    public function getBalance() // Public method to get current balance
    {
        return $this->balance; // Return balance
    }
}
$account = new BankAccount("123456789", 500); // Create a new bank account
$account->deposit(200); // Deposit money
$account->withdraw(100); // Withdraw money
echo "Current Balance: $" . $account->getBalance() . "\n"; // Display current balance






?>