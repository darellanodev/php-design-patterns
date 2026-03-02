<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\SimpleFactory\DoorExample\DoorFactory;

// Make me a door of 100x200
$door = DoorFactory::makeDoor(100, 200);

echo 'Width: ' . $door->getWidth() . ', ';
echo 'Height: ' . $door->getHeight();

// Make me a door of 50x100
$door2 = DoorFactory::makeDoor(50, 100);