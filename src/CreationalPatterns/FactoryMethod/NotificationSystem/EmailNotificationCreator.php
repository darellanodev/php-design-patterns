<?php

namespace App\CreationalPatterns\FactoryMethod\NotificationSystem;

class EmailNotificationCreator extends NotificationCreator
{
    public function createNotification(): Notification
    {
        return new EmailNotification();
    }
}
