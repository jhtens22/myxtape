<?php
class SongDAO {

    function getSongsByUserId($user_id){
        require_once('./utilities/connection.php');
        require_once('./song/song.php');

        $sql = "SELECT song_id, songTitle, songArtist, songGenre, songDescription, showYoutube, songSpotify, 
                songPoster FROM `myxtape`.`song` WHERE user_id= " . $user_id;
        $result = $conn->query($sql);

        $songs = [];
        $index = 0;
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $song = new song();

                $song->setSongId($row["song_id"]);
                $song->setSongTitle($row["songTitle"]);
                $song->setSongArtist($row["songArtist"]);
                $song->setSongGenre($row["songGenre"]);
                $song->setSongDescription($row["songDescription"]);
                $song->setSongYoutube($row["songYoutube"]);
                $song->setSongSpotify($row["songSpotify"]);
                $song->setSongPoster($row["songPoster"]);
                $songs[$index] = $song;
                $index++;
            }
        }
        $conn->close();

        return $songs;
    }

    function createSong($song){
        require_once('./utilities/connection.php');
    
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO `myxtape`.`song` (`songTitle`, `songArtist`, `songGenre`,
        `songDescription`, `songYoutube`,`songSpotify`, `songPoster`, `user_id`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
        $st = $song->getSongTitle();
        $sa = $song->getSongArtist();
        $sg = $song->getSongGenre();
        $sd = $song->getSongDescription();
        $sy = $song->getSongYoutube();
        $ss = $song->getSongSpotify();
        $sp = $song->getSongPoster();
        $ui = $song->getUserId();
    
        $stmt->bind_param("sssssssi", $st, $sa, $sg, $sd, $sy, $ss, $sp, $ui);
        $stmt->execute();
    
        $stmt->close();
        $conn->close();
      }

      function deleteSong($uid, $sid){
        require_once('./utilities/connection.php');
        
        $sql = "DELETE FROM `myxtape`.`song` WHERE `user_id` = " . $uid . " AND song_id = " . $sid . ";";
        if ($conn->query($sql) === TRUE) {
          echo "song deleted";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
      }
}
?>