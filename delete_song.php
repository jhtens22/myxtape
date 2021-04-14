<?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('./song/song.php');
    
    $song = new song();
    $songs = $song->deleteSong($_SESSION["user_id"], $_GET["song_id"]);
?>

<?php 
    require_once('./footer.php');
?>