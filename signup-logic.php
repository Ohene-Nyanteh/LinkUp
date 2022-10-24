<?php

session_start();
require 'Config/Database.php';


// get sign in page if the sign up button was clicked.

if(isset($_POST['submit'])){
    // form data
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //lastname
    $lastname =  filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    //username
    $username =  filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //email
    $email =  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    //createpassword
    $createpassword =  filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //confirmpassword
    $confirmpassword =  filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    //avatar
    $avatar = $_FILES['avatar'];


    //Validate Input

    if(!$firstname){
        $_SESSION['signup'] = "Please Enter your First Name";
    }
    elseif(!$lastname){
        $_SESSION['signup'] = "Please Enter your Last Name";
    } 
    elseif(!$username){
        $_SESSION['signup'] = "Please Enter your Last Name";
    }
    elseif(!$email){
        $_SESSION['signup'] = "Please Enter a valid email";
    }
    elseif(strlen($createpassword)< 8 || strlen($confirmpassword) < 8){
        $_SESSION['signup'] = "Password should be 8+ characters";
    }
    elseif(!$avatar['name']){
        $_SESSION['signup'] = "Please add avatar";
    }
    else{
        //check if passwords march
        if($createpassword!== $confirmpassword){
            $_SESSION['signup'] = "Password do not march";
        }
        else{
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // check if username or email already exist in database
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email = '$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);

            if(mysqli_num_rows($user_check_result)> 0){
                $_SESSION['signup'] = "Username or email Already exist!";
            }
            else{
                // WORK ON Avatar
                //rename avatar
                $time = time(); // make each upload unique
                $avatar_name= $time.$avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'Images/'. $avatar_name;

                //make sure file is image
                $allowed_files = ['jpg', 'png', 'jpeg'];
                $extension = explode('.', $avatar_name); // separates name from extension
                $extension = end($extension);

                if(in_array($extension, $allowed_files)){
                    //make sure files is not to large 1mb+

                    if($avatar['size'] < 1000000){
                        //upload image
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }
                    else{
                        $_SESSION['signup']= "File Size too big. Should be less than 1mb";
                    }

                }
                else{
                    $_SESSION['signup']= "Sile should be png, jpeg or jpg";
                }

            }
        }
    }

    //redirect back to sign up page if there was any problem
    if(isset($_SESSION['signup'])){
        //pass form data back to 
        header('location: '. ROOT_URL . 'signup.php');
        die();
    }
    else{
        $inset_user_query= "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) VALUES('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";

        if(!mysqli_errno($connection)){
            // redirect to login page with sucess message
            $_SESSION['signup-sucess'] = "Registration sucessful. Please Log in";
            header('location: '. ROOT_URL. 'sign-in.php');
            die();
        }
    }

} else{
    //if button wasnt clicked then bounce back to sign up page.
    header('location: '. ROOT_URL. 'sign-up.php');
    die();
}