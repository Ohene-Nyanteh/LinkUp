<?php
include ('Partials/Header.php');
if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //fetch category from database.
    $query = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
        $category = mysqli_fetch_assoc($result);
    }
}
else{
    header('location: '. ROOT_URL ."Admin/manage-categories.php");
}
?>

    <section class="form__section">
        <div class="form__section-container">
            <h2>Edit category</h2>
            <div class="alert__message sucess">
                <p>This is an Sucess message</p>
            </div>
            <form action="<?= ROOT_URL?>Admin/edit-category-logic.php" method="post">
            <input type="hidden" value ="<?= $category['id']?>" name= "id">
                <input type="text" value ="<?= $category['title']?>" name= "title" placeholder="Title">

                <textarea rows="10" name="description" placeholder="description"><?= $category['description']?></textarea>
                <button type="submit" name="submit" class="form-button">Edit Category</button>
            </form>        
        </div>
    </section>

    <?php
    include('../Partials/Footer.php');
?>
</body>
</html>
