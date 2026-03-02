<?php

namespace App\SimpleFactory\DoorExample;

use App\SimpleFactory\DoorExample\Door;
use App\SimpleFactory\DoorExample\WoodenDoor;

class DoorFactory
{
    public static function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);   
    }
}