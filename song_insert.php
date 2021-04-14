<?php 
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    require_once('./song/song.php');
    require_once('./sessioncheck.php');

    $song = new song();
    $song->setSongTitle($_POST["songTitle"]);
    $song->setSongArtist($_POST["songArtist"]);
    $song->setSongGenre($_POST["songGenre"]);
    $song->setSongDescription($_POST["songDescription"]);
    $song->setSongYoutube($_POST["songYoutube"]);
    $song->setSongSpotify($_POST["songSpotify"]);
    $song->setSongPoster($_POST["songPoster"]);
    $song->setUserId($_SESSION["user_id"]);
    $song->createSong();

    //header("Location: dashboard.php");
?>