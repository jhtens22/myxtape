<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('./header.php');
?>

<form method="POST" action="song_insert.php">
    <div class="mb-3">
        <label for="title" class="form-label">Song Title</label>
        <input type="text" class="form-control" id="title" name="songTitle" placeholder="Let It Be">
    </div>
    <div class="mb-3">
        <label for="artist" class="form-label">Artist</label>
        <input type="text" class="form-control" id="artist" name="songArtist" placeholder="The Beatles">
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre</label>
        <input type="text" class="form-control" id="genre" name="songGenre" placeholder="Pop">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="songDescription" placeholder="
        A ballad about getting through hard times">
    </div>
    <div class="mb-3">
        <label for="youtube" class="form-label">Youtube Link</label>
        <input type="text" class="form-control" id="youtube" name="songYoutube" placeholder="
        https://www.youtube.com/watch?v=HzvDofigTKQ">
    </div>
    <div class="mb-3">
        <label for="spotify" class="form-label">Spotify Link</label>
        <input type="text" class="form-control" id="spotify" name="songSpotify" placeholder="
        https://open.spotify.com/track/4qsVPnhbvEooD1bSNqvvh0?si=vMldZcQoQY-vTrUfS0gSbw">
    </div>
    <div class="mb-3">
        <label for="poster" class="form-label">Spotify Link</label>
        <input type="text" class="form-control" id="poster" name="songPoster" placeholder="
        https://upload.wikimedia.org/wikipedia/en/2/25/LetItBe.jpg">
    </div>
    
    <input type="submit" value="Add Show" />
</form>

<a href="logout.php">Logout</a>

<?php 
    require_once('./footer.php');
?>