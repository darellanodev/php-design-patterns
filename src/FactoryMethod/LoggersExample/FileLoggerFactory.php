<?php

namespace App\FactoryMethod\LoggersExample;

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
