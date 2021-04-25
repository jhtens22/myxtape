<?php
require_once('./user/user.php');

class session {
  // Methods
  function login($username, $password) {
    $user = new User();
    $loggedInUser = $user->checkLogin($username, $password);
    if($loggedInUser != 0){
      $_SESSION["loggedIn"] = true;
      $_SESSION["user_id"] = $loggedInUser[0];
      $_SESSION["username"] = $loggedInUser[1];
      return true;
    }
    else{
      unset($_SESSION["loggedIn"]);
      unset($_SESSION["user_id"]);
      unset($_SESSION["username"]);
      return false;
    }
  }
  function logout() {
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["user_id"]);
    unset($_SESSION["username"]);
  }
}
?>