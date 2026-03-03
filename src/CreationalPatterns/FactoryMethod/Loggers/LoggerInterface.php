<?php

namespace App\CreationalPatterns\FactoryMethod\Loggers;

interface LoggerInterface
{
    public function log(string $message): void;
}
