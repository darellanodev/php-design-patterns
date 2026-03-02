<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loggers Example</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
<pre><?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\FactoryMethod\LoggersExample\FileLoggerFactory;
use App\FactoryMethod\LoggersExample\DatabaseLoggerFactory;

$fileLoggerFactory = new FileLoggerFactory();
$fileLoggerFactory->log("This is a file log message.");

echo "\n";

$databaseLoggerFactory = new DatabaseLoggerFactory();
$databaseLoggerFactory->log("This is a database log message.");

?></pre>
</body>
</html>
