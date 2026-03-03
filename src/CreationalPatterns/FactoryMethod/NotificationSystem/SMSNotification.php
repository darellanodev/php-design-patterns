<?php

namespace App\CreationalPatterns\FactoryMethod\NotificationSystem;

class SMSNotification implements Notification
{
    public function send(): void
    {
        echo "Sending SMS Notification\n";
    }
}
