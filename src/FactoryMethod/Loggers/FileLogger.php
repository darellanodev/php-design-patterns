<?php

namespace App\FactoryMethod\Loggers;

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo '[FILE LOG] '.$message.PHP_EOL;
    }
}
