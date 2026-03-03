<?php

namespace App\CreationalPatterns\FactoryMethod\NotificationSystem;

class EmailNotification implements Notification
{
    public function send(): void
    {
        echo "Sending Email Notification\n";
    }
}
