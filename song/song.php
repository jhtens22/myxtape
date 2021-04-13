<?php
require_once('./song/songDAO.php');

class Song implements \JsonSerializable {
    private $song_id;
    private $songTitle;
    private $songArtist;
    private $songGenre;
    private $songDescription;
    private $songYoutube;
    private $songSpotify;
    private $songPoster;
    private $user_id;

    function __construct() {
    }
    function getUserId(){
        return $this->user_id;
    }
    function setUserId($user_id){
        $this->user_id = $user_id;
    }
    function getSongTitle(){
        return $this->songTitle;
    }
    function setSongTitle($songTitle){
        $this->songTitle = $songTitle;
    }
    function getSongId(){
        return $this->song_id;
    }
    function setSongId($song_id){
        $this->song_id = $song_id;
    }
    function getSongDescription() {
        return $this->songDescription;
    }
    function setSongDescription($songDescription){
        $this->songDescription = $songDescription;
    }
    function getSongArtist() {
        return $this->songArtist;
    }
    function setSongArtist($songArtist){
        $this->songArtist = $songArtist;
    }

    function getSongGenre() {
        return $this->songGenre;
    }
    function setSongGenre($songGenre){
        $this->songGenre = $songGenre;
    }
    function getSongYoutube() {
        return $this->songYoutube;
    }
    function setSongYoutube($songYoutube){
        $this->songYoutube = $songYoutube;
    }
    function getSongSpotify() {
        return $this->songSpotify;
    }
    function setSongSpotify($songSpotify){
        $this->songSpotify = $songSpotify;
    }
    function getSongPoster() {
        return $this->songPoster;
    }
    function setSongPoster($songPoster){
        $this->songPoster = $songPoster;
    }

    function getMySongs($user_id){
        $songDAO = new songDAO();
        return $songDAO->getSongsByUserId($user_id);
    }

    function createSong(){
        $songDAO = new songDAO();
        $songDAO->createSong($this);
    }

    function deleteSong($user_id, $song_id){
        $songDAO = new songDAO();
        return $songDAO->deleteSong($user_id, $song_id);
    }

    function jsonSerialize(){
        $vars = get_object_vars($this);
        return $vars;
    }
}
?>