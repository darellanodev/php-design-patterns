<?php

namespace FactoryMethod\NotificationSystem;

class PushNotification implements Notification
{
    public function send(): void
    {
        echo "Sending Push Notification\n";
    }
}
