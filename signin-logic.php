<?php

require 'Config/Database.php';


if(isset($_POST['submit'])){
    //get form data
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$username_email){
        $_SESSION['signin'] = "Username or email required";
    }elseif(!$password){
        $_SESSION['signin'] = "Password Required!";
    }
    else{
        //fetch user from database
        $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result)== 1){
            //convert the record to associative array.. Unhashing the password.
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            //compare form passowrd with database password
            if(password_verify($password, $db_password)){
                // set sesion for access control
                $_SESSION['user-id'] = $user_record['id'];

                // check if user is admin or not
                if ($user_record['is_admin']== 1){
                    $_SESSION['user_isadmin'] = true;
                }

                //log user in
                header('location: '. ROOT_URL. "Admin/");
            }
             else{
                  $_SESSION['signin']= "Please check you input";
            }
        }
        else{
            $_SESSION['signin'] = "User not found!";
        }
    }

    if(isset($_SESSION['signin'])){
        $_SESSION['signin-data']= $_POST;
        header('location: '.ROOT_URL. "sign-in.php");
        die();
    }
}
else{
    header('loacation: '. ROOT_URL. "sign-in.php");
    die();
}