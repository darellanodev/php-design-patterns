<?php

namespace App\FactoryMethod\Managers;

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'Asking about design patterns!';
    }
}
