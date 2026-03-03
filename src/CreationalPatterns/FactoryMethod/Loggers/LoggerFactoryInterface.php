<?php

namespace App\CreationalPatterns\FactoryMethod\Loggers;

interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;

    public function log(string $message): void;
}
