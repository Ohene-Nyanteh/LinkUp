<?php 
session_start();
require "Config/constants.php";

// get back info if there is registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

//delete signup data session
unset($_SESSION['signup-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | LinkUp.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= ROOT_URL?>Style and Scripts\style.css">
    <link rel="stylesheet" href="../Style and Scripts\Resposnsive-style.css">
    <!--======================FONTS=======================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,700;0,800;1,100;1,400;1,600;1,900&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link rel="icon" href="../Images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="form__section">
        <div class="form__section-container">
            <h2>Sign Up</h2>
            <?php 
            if(isset($_SESSION['signup'])) : ?>
            <div class="alert__message error">
               <p>
                <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?>
               </p>
            </div>
            <?php endif ?>
            
            <form action="<?=ROOT_URL ?>signup-logic.php" method="post" enctype="multipart/form-data">
                <input type="text" name="firstname" value="<?=$firstname?>" placeholder="First Name" >
                <input type="text" 
                value="<?=$lastname?>" name="lastname" placeholder="Last Name">
                <input type="text" name="username" value="<?=$username?>" placeholder="Username">
                <input type="email" 
                value="<?=$email?>" name="email" placeholder="Email">
                <input type="password" name="createpassword" 
                value="<?=$createpassword?>" placeholder="Create Password">
                <input type="password" 
                name="confirmpassword"
                value="<?=$confirmpassword?>"  placeholder="Confirm password">
                <div class="form__control">
                    <label for="avatar" class="user_avatar">User Avatar</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" class="form-button" name="submit">Sign Up</button>
                <small>Already have an account? <a href="sign-in.php">Sign In</a></small>
            </form>        
        </div>
    </section>
</body>
</html>

