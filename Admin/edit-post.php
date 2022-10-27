<?php
include('Partials/Header.php');

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //fetch post from database.
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $post = mysqli_fetch_assoc($result);
    }

    $query_cat = "SELECT * FROM categories";
    $category_result = mysqli_query($connection, $query_cat);
}
?>

<section class="form__section">
    <div class="form__section-container">
        <h2>Edit Post</h2>
        <?php
        if (isset($_SESSION['edit-post'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['edit-post'];
                    unset($_SESSION['edit-post']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>/Admin/edit-post-logic.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="hidden" name="previous_thumbnail_name" value="<?= $post['thumbnail'] ?>">
            <input type="text" name="title" placeholder="Title" value="<?= $post['title'] ?>">
            <textarea rows="10" name="body" placeholder="Body..."><?= $post['body'] ?></textarea>
            <select name="category">
                <?php while ($category = mysqli_fetch_assoc($category_result)) : ?>
                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
                <?php endwhile ?>
            </select>
            <div class="form__control inline">
                <input type="checkbox" value="1" name="is_featured" checked id="Featured">
                <label for="Featured">Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail" class="user_avatar">Change Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="form-button">Post</button>
        </form>
    </div>
</section>

<?php
include('../Partials/Footer.php');
?>
</body>

</html>