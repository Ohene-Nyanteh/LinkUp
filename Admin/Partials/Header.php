<?php
require 'Config\Database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp.com</title>
    <!--======================Style=============-->
    <link rel="stylesheet" href="<?= ROOT_URL?>Style and Scripts\style.css">
    <link rel="stylesheet" href="<?= ROOT_URL?>Style and Scripts\Resposnsive-style.css">
    <!--======================FONTS=======================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,700;0,800;1,100;1,400;1,600;1,900&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link rel="icon" href="Images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--=============================NAV================================-->
<header>
  <nav class="nav__container" id="header">
    <!--logo-->
    <a href="<?= ROOT_URL?>"><h2>LinkUp.com</h2></a>
    <ul class="Nav-menu">
        <li class="nav-element"><a href="<?= ROOT_URL?>index.php" id="active">Home</a></li>
        <li class="nav-element"><a href="<?= ROOT_URL?>about.php">About</a></li>
        <li class="nav-element"><a href="<?= ROOT_URL?>services.php">Services</a></li>
        <li class="nav-element"><a href="<?= ROOT_URL?>contact.php">Contact</a></li>
        <li class="nav-element"><a href="<?= ROOT_URL?>sign-in.php">Sign In</a></li>
        <li class="undropdown">
            <a href="#"><img class="avatar" src="Images/pic10.jpg" width="40" height="40"></a>
              <i class="fa fa-caret-down"></i>
            <div class="dropdown-content">
              <a href="<?= ROOT_URL?>Admin/index.php">Dashboard</a>
              <a href="#">Log Out</a>

            </div>
        </li>
    </ul>
  </nav>
</header>