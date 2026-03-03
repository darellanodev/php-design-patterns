<?php

namespace App\CreationalPatterns\SimpleFactory\Door;

class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}
