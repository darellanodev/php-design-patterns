<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Door Factory Example</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<p><a href="../../index.php">&larr; Back to main index</a></p>
<pre><?php

require_once __DIR__.'/../../vendor/autoload.php';

use App\SimpleFactory\DoorExample\DoorFactory;

// Make me a door of 100x200
$door = DoorFactory::makeDoor(100, 200);

echo 'Width: '.$door->getWidth().', ';
echo 'Height: '.$door->getHeight();

echo "\n";

// Make me a door of 50x100
$door2 = DoorFactory::makeDoor(50, 100);

?></pre>
</body>
</html>
