<?php

// dependency injection example
class Logger
{
    public function log($message)
    {
        echo "Log entry: " . $message . "\n";
    }
}
class UserService
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function createUser($username)
    {
        // Logic to create a user
        $this->logger->log("User '$username' has been created.");
    }
}
$logger = new Logger();
$userService = new UserService($logger);
$userService->createUser("john_doe");





?>