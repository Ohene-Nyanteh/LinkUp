<?php
require 'Config/Database.php';

if (isset($_GET['id'])) {
        //get updated form data
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        //update category_id of post that beling to this category to id of uncategorized category

        $update_query = "UPDATE posts SET category_id=5 WHERE category_id=$id";
        $update_result = mysqli_query($connection, $update_query);

        if (!mysqli_errno($connection)) {
                //delete category
                $query = "DELETE FROM categories WHERE id=$id LIMIT 1";
                $result = mysqli_query($connection, $query);
                $_SESSION['delete-category-sucess'] = "Category deleted sucessfully";
        }
}

header('location: ' . ROOT_URL . 'Admin/manage-categories.php');
die();
