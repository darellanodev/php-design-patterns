<?php

namespace App\FactoryMethod\LoggersExample;

interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;
    public function log(string $message): void;
}
