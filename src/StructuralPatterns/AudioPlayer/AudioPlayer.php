<?php

namespace App\StructuralPatterns\AudioPlayer;

class AudioPlayer implements MediaPlayer
{
    private $mediaAdapter;

    public function play(string $audioType, string $fileName)
    {
        if ($audioType === 'mp3') {
            echo 'Playing mp3 file: '.$fileName."\n";
        } elseif ($audioType === 'vlc' || $audioType === 'mp4') {
            $this->mediaAdapter = new MediaAdapter();
            $this->mediaAdapter->play($audioType, $fileName);
        } else {
            echo 'Invalid media. '.$audioType." format not supported\n";
        }
    }
}
