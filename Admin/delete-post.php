<?php 
require 'Config/Database.php';

if(isset($_GET['id'])){
    // fetch post from database
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);

    // check number of posts
    if(mysqli_num_rows($result)==1){
        $thumbnail_name = $post['thumbnail'];
        $avatar_path = '../Images/' . $thumbnail_name;

        //delete image is available
        if($avatar_path){
            unlink($avatar_path);
        }
    }

//for later





//delete post from database
$delete_post_query = "DELETE FROM posts WHERE id = $id";
$delete_post_results = mysqli_query($connection, $delete_post_query);
if(mysqli_errno($connection)){
    $_SESSION['delete-post'] = "Couldn't delete '{$post['title']}'";
}
else{
    $_SESSION['delete-post-sucess'] = "Deleted'{$post['title']}' Sucessfully!";
}

}
header('location: '. ROOT_URL. 'Admin/index.php');
die();
?>


