<?php 
    require_once('./header.php');
?>

<main role="main" class="container">
    
    <a class="button" href="add_song.php">Create Song</a>

    <?php

    if(isset($_GET['del']) AND $_GET['del'] == "true"){
       echo "<script>alert('Song was deleted!')</script>";
    }

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('./song/song.php');

    $song = new song();
    $songs = $song->getMySongs($_SESSION["user_id"]);  

    $arrlength = count($songs);

    echo '<div class="row">';

    for($x = 0; $x < $arrlength; $x++) {            
        echo '<div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img href="' . $songs[$x]->getSongPoster() . '" class="card-img-top" alt="Song Poster">
                    <div class="card-body">
                        <h5 class="card-title">' . $songs[$x]->getSongTitle() . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Genre: ' . $songs[$x]->getSongGenre() . '</h6>
                        <p class="card-text">' . $songs[$x]->getSongDescription() . '</p>
                        <a href="delete_song.php?song_id=' . $songs[$x]->getSongId() .'" class="card-link">Delete Song</a>
                    </div>
                    </div>
                    <br />
                </div>';
    }

    echo '</div>';
    ?>

    <a href="logout.php">Logout</a>
</main>


<?php 
    require_once('./footer.php');
?>