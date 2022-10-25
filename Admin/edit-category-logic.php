<?php 
require 'Config/Database.php';

if(isset($_POST['submit'])){
    //get updated form data
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$title || !$description){
        $_SESSION['edit-category'] = "Invalid form input!";
    }
    else{
        $query = "UPDATE categories SET title='$title', description= '$description' WHERE id=$id LIMIT 1";
        $result = mysqli_query($connection, $query);

        if(mysqli_errno($connection)){
            $_SESSION['edit-category'] = "Couldnt Update Category";
        }
        else{
            $_SESSION['edit-category-sucess'] = "Category: $title update successfully";
        }
    }
}

header('location: '. ROOT_URL. 'Admin/manage-categories.php');
die();
?>