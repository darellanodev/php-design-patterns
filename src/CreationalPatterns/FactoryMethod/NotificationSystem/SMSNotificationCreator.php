<?php

namespace App\CreationalPatterns\FactoryMethod\NotificationSystem;

class SMSNotificationCreator extends NotificationCreator
{
    public function createNotification(): Notification
    {
        return new SMSNotification();
    }
}
