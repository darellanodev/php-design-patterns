<?php

namespace App\StructuralPatterns\AudioPlayer;

interface MediaPlayer
{
    public function play(string $audioType, string $fileName);
}
