<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once('./user/user.php')

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

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Voltaire&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/33bde7901a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/project.css">
  </head>

  <body>
    <?php 
      $user = new user();
      $thisUser = $user->getUser($_SESSION["user_id"]);
    ?>

    <h1 class="text-center text-primary">
      <?php echo $_SESSION["username"]; ?>'s Myxtape
    </h1>