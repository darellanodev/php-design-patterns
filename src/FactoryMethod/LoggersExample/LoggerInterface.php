<?php

namespace App\FactoryMethod\LoggersExample;

interface LoggerInterface
{
    public function log(string $message): void;
}
