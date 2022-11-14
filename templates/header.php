<?php
  include_once("helpers/url.php");
  include_once("data/posts.php");
  include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TITLE -->
  <title>TV Review</title>
  <link rel="icon" href="img/logo.png">
  <!-- MAIN CSS -->
  <link type="text/css" rel="stylesheet" href= "<?= $BASE_URL ?>css/style.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="index.php" id="logo">
      <img src="img/logo.png" alt="TV Review">
    </a>
    <nav>
      <ul id="navBar">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categories</a></li>
        <li><a href="#" class="nav-link">About</a></li>
        <li><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>