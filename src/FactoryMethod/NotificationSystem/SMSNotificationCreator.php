<?php

namespace FactoryMethod\NotificationSystem;

class SMSNotificationCreator extends NotificationCreator
{
    public function createNotification(): Notification
    {
        return new SMSNotification();
    }
}
