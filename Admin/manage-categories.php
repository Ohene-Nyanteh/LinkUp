<?php
include('../Admin/Partials/Header.php');

// fetch category from database
$query = "SELECT * FROM categories ORDER BY title";
$categories = mysqli_query($connection, $query);

?>
<!--====================================End of Nav=======================-->

<!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->
<section class="container main-s">
    <section class="dashboard">
        <?php if (isset($_SESSION['add-category-sucess'])) : // shows add user was sucessful
        ?>
            <div class="alert__message sucess container">
                <?= $_SESSION['add-category-sucess'];
                unset($_SESSION['add-category-sucess']); ?>
            </div>
        <?php elseif (isset($_SESSION['add-category'])) : // shows add user was sucessful
        ?>
            <div class="alert__message error container">
                <?= $_SESSION['add-category'];
                unset($_SESSION['add-category']); ?>
            </div>
        <?php elseif (isset($_SESSION['edit-category-sucess'])) : // shows edit user was sucessful
        ?>
            <div class="alert__message sucess container">
                <?= $_SESSION['edit-category-sucess'];
                unset($_SESSION['edit-category-sucess']); ?>
            </div>
        <?php elseif (isset($_SESSION['edit-category'])) : // shows edit user was sucessful
        ?>
            <div class="alert__message error container">
                <?= $_SESSION['edit-category'];
                unset($_SESSION['edit-category']); ?>
            </div>

        <?php endif ?>
        <div class="container dashboard__container">
            <div class="aside">
                <ul>
                    <li>
                        <h5><a href="add-post.php"><i class="uil uil-comment-alt-message"></i>Add Post</a></h5>
                    </li>
                    <li>
                        <a href="index.php"><i class="uil uil-align-left"></i>
                            <h5>Manage Post</h5>
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['user_is_admin'])) : ?>




                        <li>
                            <a href="add-user.php"><i class="uil uil-user-plus"></i>
                                <h5>Add User</h5>
                            </a>
                        </li>
                        <li>
                            <a href="manage-users.php"><i class="uil uil-users-alt"></i>
                                <h5>Manage Users</h5>
                            </a>
                        </li>
                        <li>
                            <a href="add-category.php"><i class="uil uil-book-medical"></i>
                                <h5>Add Category</h5>
                            </a>
                        </li>
                        <li>
                            <a href="manage-categories.php" class="active"><i class="uil uil-apps"></i>
                                <h5>Manage Categories</h5>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>


            </div>
            <div class="main">
                <h2>Manage Categories</h2>
                <?php if (mysqli_num_rows($categories) > 0) : ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                                <tr>
                                    <td style="color: white;"><?= $category['title'] ?></td>
                                    <td><a href="<?= ROOT_URL ?>Admin/edit-category.php?id=<?= $category['id'] ?>" class="btn sm">Edit</a></td>
                                    <td><a href="<?= ROOT_URL ?>Admin/delete-category.php?id=<?= $category['id'] ?>
" class="btn sm danger">Delete</a></td>
                                </tr>
                            <?php endwhile ?>

                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert__mesage error">
                        <?= "NO CATEGORIES FOUND!" ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
</section>


<!--===============================FOOTER================================-->
<?php
include('../Partials/Footer.php');
?>
</body>
<!--Script-->
<script src="Style and Scripts\Main.js"></script>
<style>
    .avatar {
        background-color: var(--color-primary);
        border-radius: 50%;
        padding: 0;
        margin-top: 1rem;
        margin-right: 1rem;
        display: block;
    }
</style>

</html>