<?php

namespace App\StructuralPatterns\AudioPlayer;

class MediaAdapter extends AdvancedMediaPlayer implements MediaPlayer
{
    public function play(string $audioType, string $fileName)
    {
        if ($audioType === 'vlc') {
            $this->playVlc($fileName);
        } elseif ($audioType === 'mp4') {
            $this->playMp4($fileName);
        }
    }
}
