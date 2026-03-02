<?php

namespace App\FactoryMethod\ManagersExample;

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}