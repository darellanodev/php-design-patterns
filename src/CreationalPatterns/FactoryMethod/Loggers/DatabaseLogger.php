<?php

namespace App\CreationalPatterns\FactoryMethod\Loggers;

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo '[DATABASE LOG] '.$message.PHP_EOL;
    }
}
