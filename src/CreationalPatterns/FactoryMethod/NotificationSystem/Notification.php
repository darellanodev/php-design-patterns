<?php

namespace App\CreationalPatterns\FactoryMethod\NotificationSystem;

interface Notification
{
    public function send(): void;
}
