<?php 
    require_once('./header.php');
?>
<style>
    .footer{
        position: static !important;
        bottom: 0px !important;
    }
</style>


<section role="main" class="container mx-auto mb-5">

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
                    <img src="' . $songs[$x]->getSongPoster() . '" class="card-img-top" alt="' . $songs[$x]->getSongTitle() . ' Poster">
                    <div class="card-body">
                        <h5 class="card-title">' . $songs[$x]->getSongTitle() . '</h5>
                        <div class="row">
                            <div class="col-6 text-start">
                                <h6 class="card-subtitle mb-2">Genre: ' . $songs[$x]->getSongGenre() . '</h6> 
                            </div>
                            <div class="col-6 text-end">
                                <h6 class="card-subtitle mb-2">Artist: ' . $songs[$x]->getSongArtist() . '</h6> 
                            </div>
                        </div>
                        <p class="card-text">' . $songs[$x]->getSongDescription() . '</p>
                        <div class="row">
                            <div class="col-6 text-right">
                                <a class="text-end" target="_blank" href="'. $songs[$x]->getSongYoutube() .'" ><h3><i alt="youtube link" class="fab fa-youtube"></i></h3></a>
                            </div>
                            <div class="col-6 text-end">
                                <a class="text-end" target="_blank" href="'. $songs[$x]->getSongSpotify() .'" ><h3><i alt="spotify link" class="fab fa-spotify"></i></h3></a>
                            </div>
                        </div>
                        <a href="delete_song.php?song_id=' . $songs[$x]->getSongId() .'" class="card-link">Delete Song</a>
                    </div>
                    </div>
                    <br />
                </div>';
    }

    echo '</div>';
    ?>

    
</section>


<?php 
    require_once('./footer.php');
?>