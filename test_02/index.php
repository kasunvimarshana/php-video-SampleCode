<?php
    include_once('VideoStream.php');
    $filePath = 'small.mp4';
    $stream = new VideoStream($filePath);
    $stream->start();
?>