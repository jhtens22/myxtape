<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('./sessioncheck.php');
require_once('./user/user.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Myxtape</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon-32x32.png"/>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Voltaire&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/33bde7901a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/project.css">
  </head>

  <body>
    <?php 
      $user = new user();
      $thisUser = $user->getUser($_SESSION["user_id"]);
    ?>

    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="img/myxtape_logo.png" alt="myxtape" width="50px" height="30px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="index.html">Home</a>
              <a class="nav-link" href="dashboard.php">Playlist</a>
              <a class="nav-link" href="add_song.php">Create Song</a>
            </div>
            <a class="nav-link" href="logout.php">Logout</a>
          </div>
        </div>
      </nav>
    </header>

    <h1 class="text-center">
      <?php echo $thisUser->getUsername(); ?>'s Myxtape
    </h1>