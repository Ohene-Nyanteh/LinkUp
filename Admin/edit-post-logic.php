<?php
require 'Config/Database.php';

if (isset($_POST['submit'])) {
    //get updated form data
    $author_id = $_SESSION['user-id'];
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
    $is_featured= filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $thumbnail = $_FILES['thumbnail'];

    //validate form data
    if (!$title) {
        $_SESSION['edit-post'] = "Enter post title";
    } elseif (!$body) {
        $_SESSION['edit-post'] = "Enter post body";
    } elseif (!$category_id) {
        $_SESSION['edit-post'] = "Enter post category";
    // } elseif (!$thumbnail['name']) {
    //     $_SESSION['edit-post'] = "Chose post thumbnail";
    } else {
                //work on thumbnail
        //  //update post
        // $query = "UPDATE posts SET title='$title', body='$body', thumbnail= $thumbnail";
        //  $result = mysqli_query($connection, $query);
 
        //  if(mysqli_errno($connection)){
        //      $_SESSION['edit-user'] = "Failed to update user!";
        //  }
        //  else{
        //      $_SESSION['edit-user-sucess'] = "User:  $firstname $lastname ($username)'s profile updated sucessfully";
        //  }
        if(isset($_SESSION['edit-post'])){
            header('location: '. ROOT_URL . 'Admin/edit-post.php');
        }
        else{
            //set if featured of all post to zero if is featured== 1
            if($is_featured==1){
                $zero_all_is_featured_query = "UPDATE posts SET is_featured= 0";
                $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);

            }
    
            // insert post into database
            $query = "UPDATE posts SET title='$title', body='$body', category_id= $category_id, author_id=$author_id, is_featured=$is_featured WHERE id=$id LIMIT 1";
    
            $result = mysqli_query($connection, $query);
    
            if(!mysqli_errno($connection)){
                $_SESSION['edit-post-sucess'] = "New post edited sucessfully";
                header('location: '. ROOT_URL. 'Admin/');
                die();
            }else{
                $_SESSION['edit-post'] = "New post couldnt not be edited";
            }
        }
    }
}

header('location: ' . ROOT_URL . 'Admin/index.php');
die();
