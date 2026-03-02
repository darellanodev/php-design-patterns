<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\FactoryMethod\LoggersExample\FileLoggerFactory;
use App\FactoryMethod\LoggersExample\DatabaseLoggerFactory;

$fileLoggerFactory = new FileLoggerFactory();
$fileLoggerFactory->log("This is a file log message.");

$databaseLoggerFactory = new DatabaseLoggerFactory();
$databaseLoggerFactory->log("This is a database log message.");