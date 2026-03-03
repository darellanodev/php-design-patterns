<?php

namespace App\CreationalPatterns\FactoryMethod\Loggers;

class FileLoggerFactory implements LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface
    {
        return new FileLogger();
    }

    public function log(string $message): void
    {
        $logger = $this->createLogger();
        $logger->log($message);
    }
}
