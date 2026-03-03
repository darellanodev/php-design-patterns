<?php

namespace App\CreationalPatterns\FactoryMethod\Loggers;

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo '[FILE LOG] '.$message.PHP_EOL;
    }
}
