<?php
// get Infos from MusicDemons API
$songInfo = file_get_contents($songUrl);
$songInfo=json_decode($songInfo);
$songLyrics = file_get_contents($songLyricsUrl);

$youtubeUrl= $songInfo->{"youtube_id"};

$songDate= $songInfo->{"released"};

?>
