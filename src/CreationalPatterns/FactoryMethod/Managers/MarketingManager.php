<?php

namespace App\CreationalPatterns\FactoryMethod\Managers;

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}
