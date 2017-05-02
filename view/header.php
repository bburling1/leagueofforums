<!DOCTYPE html>
<html>
<head>
  <!-- Add variable $title to title tags to insert new value of each page -->
  <title><?php echo $title ?> - League of Forums</title>
  <!-- link to Bulma framework -->
  <link rel="stylesheet" type="text/css" href="css/bulma.css">
  <!-- link to Fonts -->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font.css">
  <!-- link to CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- link to javascript -->
  <script src="js/script.js"></script>
</head>

<body>
<?php
  //start session management
  session_start();

  require('../model/functions_messages.php');
  require('../model/functions_permissions.php');

  include "login_form.php";
?>

  <nav class="level nav has-shadow">
    <p class="level-item has-text-centered">
      <a class="link is-info">Home</a>
    </p>
    <p class="level-item has-text-centered">
      <a class="link is-info">About</a>
    </p>
    <p class="level-item has-text-centered">
      <img class="logo" src="images/lof_logo.PNG" alt="">
    </p>
    <p class="level-item has-text-centered">
      <a class="link is-info">Profile</a>
    </p>
    <p class="level-item has-text-centered">
      <?php
        if(!isset($_SESSION['user'])){
      ?>
      <a onClick="showloginmodal()" class="link is-info">
        Login
      </a>
      <?php
        } else {
      ?>
      <a href="../controller/logout_process.php" class="link is-info">
        Logout
      </a>
      <?php } ?>
    </p>
  </nav>
