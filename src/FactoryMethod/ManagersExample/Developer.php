<?php

namespace App\FactoryMethod\ManagersExample;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }
}