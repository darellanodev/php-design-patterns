<?php

namespace App\FactoryMethod\ManagersExample;

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about community building';
    }
}