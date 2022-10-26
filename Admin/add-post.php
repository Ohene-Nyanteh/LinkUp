<?php
include('Partials/Header.php');
// fetch all categories from database
$query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $query);

// get back form data if form was invalid
$title = $_SESSION['add-post-data']['title'] ?? null;
$body = $_SESSION['add-post-data']['body'] ?? null;

//delete form data session
unset($_SESSION['add-post-data']);
?>

<body>
    <section class="form__section">
        <div class="form__section-container">
            <h2>Add Post</h2>
            <?php
        if (isset($_SESSION['add-post'])) : ?>
        <div class="alert__message error">
            <p>
                <?= $_SESSION['add-post'];
                    unset($_SESSION['add-post']);
                    ?>
            </p>
        </div>
        <?php endif ?>
                <form action="<?= ROOT_URL ?>Admin/add-post-logic.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="title" value="<?= $title?>" placeholder="Title">
                    <textarea rows="10" name="body" placeholder="Body..."><?= $body?></textarea>

                    <select name="category">
                        <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                            <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                        <?php endwhile ?>
                    </select>
                    <?php if (isset($_SESSION['user_is_admin'])) : ?>
                        <div class="form__control inline">
                            <input type="checkbox" id="Featured" name="is_featured" value="1" checked>
                            <label for="Featured">Featured</label>
                        </div>
                    <?php endif ?>
                    <div class="form__control">
                        <label for="thumbnail" class="user_avatar">Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </div>
                    <button type="submit" name="submit" class="form-button">Post</button>
                </form>
                </div>
    </section>
</body>

<?php
include('../Partials/Footer.php');
?>
</body>

</html>