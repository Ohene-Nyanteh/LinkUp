<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | LinkUp.com</title>
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
</head>
<body>
    <section class="form__section">
        <div class="form__section-container">
            <h2>Sign Up</h2>
            <div class="alert__message error">
                <p>This is an Error message</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Username">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Create Password">
                <input type="password" placeholder="Confirm password">
                <div class="form__control">
                    <label for="avatar" class="user_avatar">User Avatar</label>
                    <input type="file" id="avatar">
                </div>
                <button type="submit" class="form-button">Sign Up</button>
                <small>Already have an account? <a href="sign-in.html">Sign In</a></small>
            </form>        
        </div>
    </section>
</body>
</html>
