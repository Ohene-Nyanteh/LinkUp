<?php 
require 'Config/Database.php';

if(isset($_GET['id'])){
    // fetch user from database
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    // check number of users
    if(mysqli_num_rows($result)==1){
        $avatar_name = $user['avatar'];
        $avatar_path = '../Images/' . $avatar_name;

        //delete image is available
        if($avatar_path){
            unlink($avatar_path);
        }
    }


// fetch all user's posts thumbnails and delete
$thumbnails_query = "SELECT thumbnail FROM posts WHERE author_id=$id";

$thumbnail_result = mysqli_query($connection, $thumbnails_query);

if(mysqli_num_rows($thumbnail_result)> 0){
    while($thumbnail = mysqli_fetch_assoc($thumbnail_result)){
        $thumbnail_path = '../Images/' . $thumbnail['thumbnail'];
        // delete thumbnail from images folder
        if($thumbnail_path){
            unlink($thumbnail_path);
        }
    }
}




//delete user from database
$delete_user_query = "DELETE FROM users WHERE id = $id";
$delete_user_results = mysqli_query($connection, $delete_user_query);
if(mysqli_errno($connection)){
    $_SESSION['delete-user'] = "Couldn't delete '{$user['firstname']}' '{$user['lastname']}'";
}
else{
    $_SESSION['delete-user'] = "Deleted'{$user['firstname']}' '{$user['lastname']}' Sucessfully!";
}

}
header('location: '. ROOT_URL. 'Admin/manage-users.php');
die();
?>