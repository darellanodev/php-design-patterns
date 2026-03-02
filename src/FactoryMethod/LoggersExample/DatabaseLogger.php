<?php

namespace App\FactoryMethod\LoggersExample;

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "[DATABASE LOG] " . $message . PHP_EOL;
    }
}
