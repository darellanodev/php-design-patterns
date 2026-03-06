<?php

namespace App\StructuralPatterns\AudioPlayer;

class AdvancedMediaPlayer
{
    public function playVlc(string $fileName)
    {
        echo 'Playing vlc file: '.$fileName."\n";
    }

    public function playMp4(string $fileName)
    {
        echo 'Playing mp4 file: '.$fileName."\n";
    }
}
