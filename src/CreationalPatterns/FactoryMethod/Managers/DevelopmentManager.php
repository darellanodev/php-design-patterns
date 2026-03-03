<?php

namespace App\CreationalPatterns\FactoryMethod\Managers;

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}
