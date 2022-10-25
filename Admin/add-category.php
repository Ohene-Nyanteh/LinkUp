<?php
include ('Partials/Header.php');
$title = $SESSION['add-category-data']['title'] ?? null;
$description = $SESSION['add-category-data']['description'] ?? null;


// REMEMBER TO THE OTHERS
unset($_SESSION['add-category-data']);
?>

    <section class="form__section">
        <div class="form__section-container">
            <h2>Add category</h2>
            <?php if(isset($_SESSION['add-category'])): ?>
                <div class="alert__message error">
                <p><?= $_SESSION['add-category'];
                unset($_SESSION['add-category'])?></p>
            </div>
            <?php endif?>
            <form action="<?= ROOT_URL?>Admin/add-category-logic.php" method="post">
                <input type="text" value="<?= $title?>" name="title" placeholder="Title">
                <textarea rows="10"
                value="<?= $description?>"  name="description"
                placeholder="description"></textarea>
                <button type="submit" name= "submit" class="form-button">Add Category</button>
            </form>        
        </div>
    </section>

    <?php
    include('../Partials/Footer.php');
?>
</body>
</html>
