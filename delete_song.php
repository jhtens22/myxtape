<?php
    echo $_GET["song_id"];

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('./song/song.php');
    require_once('./session/session.php');

    $song = new song();
    $songs = $song->deleteSong($_SESSION["user_id"], $_GET["song_id"]);

    header("Location: dashboard.php?del=true");
?>

<?php 
    require_once('./footer.php');
?>