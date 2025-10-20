<?php

interface Notifiable
{
    public function send($message);
}

class EmailNotification implements Notifiable
{
    public function send($message)
    {
        return "Email Notification: " . $message . "\n";
    }
}

class SMSNotification implements Notifiable
{
    public function send($message)
    {
        return "SMS Notification: " . $message . "\n";
    }
}

$email = new EmailNotification();
$sms = new SMSNotification();

echo $email->send("Your order has benn shipped.");
echo $sms->send("Your order has been delivered.");




?>