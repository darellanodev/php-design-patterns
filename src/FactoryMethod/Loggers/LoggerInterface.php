<?php

namespace App\FactoryMethod\Loggers;

interface LoggerInterface
{
    public function log(string $message): void;
}
