<?php

namespace FactoryMethod\NotificationSystem;

class SMSNotification implements Notification
{
    public function send(): void
    {
        echo "Sending SMS Notification\n";
    }
}
