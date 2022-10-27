<?php
require 'Config/Database.php';

if (isset($_POST['submit'])) {
    //get updated form data
    $author_id = $_SESSION['user-id'];
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $category_id = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);

    $is_featured = filter_var($_POST['is_featured'], FILTER_SANITIZE_NUMBER_INT);

    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['thumbnail'];


    //check for is featured value
    $is_featured = $is_featured == 1 ?: 0;

    //validate form data
    if (!$title) {
        $_SESSION['edit-post'] = "Enter post title on edit post page";
    } elseif (!$body) {
        $_SESSION['edit-post'] = "Enter post body on edit post page";
    } elseif (!$category_id) {
        $_SESSION['edit-post'] = "Enter post category on edit post page";
    } else {
        // delete existing thumbnail if new thumbnail is available
        if ($thumbnail['name']) {
            $previous_thumbnail_path ="../Images/" . $previous_thumbnail_name;
            if ($previous_thumbnail_path) {
                unlink($previous_thumbnail_path);
            }



            // work on new thumbnail
            //rename new thumbnail
            $time = time();
            $thumbnail_name = $time . $thumbnail['name'];
            $thumbnail_tmp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../Images/' . $thumbnail_name;

            // make sure file is an image
            $allowed_files = ['png', 'jpg', 'jpeg'];
            $extension = explode('.', $thumbnail_name);
            $extension = end($extension);
            if (in_array($extension, $allowed_files)) {
                //make sure image isnt more than 2mb
                if ($thumbnail['size'] < 2_000_000) {
                    //upload thubnail
                    move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
                } else {
                    $_SESSION['edit-post'] = "File size too big on edit post page. Whould be less than 2mb";
                }
            } else {
                $_SESSION['edit-post'] = "File should be png, jpg, or jpeg on edit post page";
            }
        }
    }

    if ($_SESSION['edit-post']) {
        header('location: ' . ROOT_URL . 'Admin/');
    } else {
        //set if featured of all post to zero if is featured== 1
        if ($is_featured == 1) {
            $zero_all_is_featured_query = "UPDATE posts SET is_featured= 0";
            $zero_all_is_featured_result = mysqli_query($connection, $zero_all_is_featured_query);
        }

        //set thumbnail name if new was inputed else keep the old one
        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        // insert post into database
        $query = "UPDATE posts SET title='$title', body='$body', thumbnail='$thumbnail_to_insert', category_id= $category_id, is_featured=$is_featured WHERE id=$id LIMIT 1";

        $result = mysqli_query($connection, $query);

        if (!mysqli_errno($connection)) {
            $_SESSION['edit-post-sucess'] = "Post Updated sucessfully";
            header('location: ' . ROOT_URL . 'Admin/');
            die();
        }
    }
}
header('location: ' . ROOT_URL . 'Admin/index.php');
die();
