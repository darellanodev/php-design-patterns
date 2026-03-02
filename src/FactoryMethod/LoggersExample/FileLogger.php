<?php

namespace App\FactoryMethod\LoggersExample;

class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "[FILE LOG] " . $message . PHP_EOL;
    }
}
