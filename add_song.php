<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('./header.php');
?>


<form method="POST" action="song_insert.php">
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="title" name="songTitle" placeholder="Song Title">
        </div>
        <div class="col-3"></div>
    </div>
    
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="artist" name="songArtist" placeholder="Artist">
        </div>
        <div class="col-3"></div>
    </div>
    
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="genre" name="songGenre" placeholder="Genre">
        </div>
        <div class="col-3"></div>
    </div>
    
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="description" name="songDescription" placeholder="
            Description">
        </div>
        <div class="col-3"></div>
    </div>
    
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="youtube" name="songYoutube" placeholder="
            Youtube Link">
        </div>
        <div class="col-3"></div>
    </div>
    
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="spotify" name="songSpotify" placeholder="
            Spotify Link">
        </div>
        <div class="col-3"></div>
    </div>
    
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="poster" name="songPoster" placeholder="
            Poster Image Link">
        </div>
        <div class="col-3"></div>
    </div>
    <div class="text-center mt-3">
        <input type="submit" class="btn text-center" value="Add Song" />
    </div>
    
</form>

<?php 
    require_once('./footer.php');
?>