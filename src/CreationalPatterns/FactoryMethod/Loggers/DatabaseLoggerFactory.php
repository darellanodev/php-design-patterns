<?php

namespace App\CreationalPatterns\FactoryMethod\Loggers;

class DatabaseLoggerFactory implements LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface
    {
        return new DatabaseLogger();
    }

    public function log(string $message): void
    {
        $logger = $this->createLogger();
        $logger->log($message);
    }
}
