<?php
require 'Config/constants.php';

$username = $_SESSION['signin-data']['username_email']?? null;

$password = $_SESSION['signin-data']['password']?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Style and Scripts\style.css">
    <link rel="stylesheet" href="../Style and Scripts\Resposnsive-style.css">
    <!--======================FONTS=======================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,700;0,800;1,100;1,400;1,600;1,900&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link rel="icon" href="../Images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign In| LinkUp.com</title>
</head>
<body>
    <section class="form__section">
        <div class="form__section-container">
            <h2>Sign In</h2>
            <?php
            if(isset($_SESSION['signup-sucess'])) :
            ?>
            <div class="alert__message sucess">
                <?= $_SESSION['signup-sucess'];
                unset($_SESSION['signup-sucess']);?>
            </div>
            <?php elseif(isset($_SESSION['signin'])): ?>
                <div class="alert__message error">
                <?= $_SESSION['signin'];
                unset($_SESSION['signin']);?>
            </div>
            <?php endif ?>
            <form action="<?=ROOT_URL?>signin-logic.php" method="post">
                <input type="text" value="<?= $username?>" name="username_email" placeholder="Username">
                <!-- <input type="email" placeholder="Email"> -->
                <!-- <input type="password" name="password" placeholder="Create Password"> -->
                <input type="password" value="<?= $password?>" name="password" placeholder="Enter password">
                <button type="submit" name="submit" class="form-button">Sign In</button>
                <small>Don't have an account? <a href="sign-up.php">Sign up</a></small>
            </form>        
        </div>
    </section>
</body>
</html>
