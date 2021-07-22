<?php

// check if there is an active session
// if there is no active session --> user is not logged in
// redirect user to login page
session_start();

if(isset($_SESSION["username"]) && isset($_SESSION["address"]) && isset($_SESSION["address"])){

  header("Location: tea.php");
  echo "You have send seesion!";
  
  exit(); }

?>
