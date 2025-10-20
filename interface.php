<?php

// interface example

interface Notifiable
{
    public function send($message);
}

class EmailNotification implements Notifiable
{
    public function send($message)
    {
        return "Email sent with message: " . $message;
    }
}

class SMSNotification implements Notifiable
{
    public function send($message)
    {
        return "SMS sent with message: " . $message;
    }
}

class PushNotification implements Notifiable
{
    public function send($message)
    {
        return "Push notification sent with message: " . $message;
    }
}

function notify(Notifiable $notifiable, $message)
{
    return $notifiable->send($message);
}

$email = new EmailNotification();
$sms = new SMSNotification();
$push = new PushNotification();

echo notify($email, "Hello via Email!") . "\n";
echo notify($sms, "Hello via SMS!") . "\n";
echo notify($push, "Hello via Push Notification!") . "\n";


?>