<?php

namespace FactoryMethod\NotificationSystem;

interface Notification
{
    public function send(): void;
}
