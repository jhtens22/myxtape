<?php 
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    require_once('./song/song.php');
    require_once('./sessioncheck.php');

    $song = new song();
    $song->setSongTitle($row["songTitle"]);
    $song->setSongArtist($row["songArtist"]);
    $song->setSongGenre($row["songGenre"]);
    $song->setSongDescription($row["songDescription"]);
    $song->setSongYoutube($row["songYoutube"]);
    $song->setSongSpotify($row["songSpotify"]);
    $song->setSongPoster($row["songPoster"]);
    $song->createSong();

    //header("Location: dashboard.php");
?>