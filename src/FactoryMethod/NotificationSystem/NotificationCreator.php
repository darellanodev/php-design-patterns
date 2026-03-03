<?php

namespace FactoryMethod\NotificationSystem;

abstract class NotificationCreator
{
    abstract public function createNotification(): Notification;

    public function notify(): void
    {
        $notification = $this->createNotification();
        $notification->send();
    }
}
