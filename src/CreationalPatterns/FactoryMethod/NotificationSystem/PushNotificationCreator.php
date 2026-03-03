<?php

namespace App\CreationalPatterns\FactoryMethod\NotificationSystem;

class PushNotificationCreator extends NotificationCreator
{
    public function createNotification(): Notification
    {
        return new PushNotification();
    }
}
