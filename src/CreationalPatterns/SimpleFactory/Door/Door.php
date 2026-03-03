<?php

namespace App\CreationalPatterns\SimpleFactory\Door;

interface Door
{
    public function getWidth(): float;

    public function getHeight(): float;
}
