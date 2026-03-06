<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Audio Player Adapter Example</title>
    <link rel="stylesheet" href="../../../css/styles.css">
</head>

<body>
    <p><a href="../../../index.php">&larr; Back to main index</a></p>
    <pre><?php

require_once __DIR__.'/../../../vendor/autoload.php';

    use App\StructuralPatterns\AudioPlayer\AudioPlayer;

    $audioPlayer = new AudioPlayer();
    $audioPlayer->play('mp3', 'song.mp3');
    $audioPlayer->play('mp4', 'video.mp4');
    $audioPlayer->play('vlc', 'movie.vlc');
    $audioPlayer->play('avi', 'clip.avi');

    ?>
</pre>
</body>

</html>