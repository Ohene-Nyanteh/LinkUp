<?php
include('Partials/Header.php');

//fetch curent user's posts from database
$current_user_id = $_SESSION['user-id'];
$query = "SELECT id, title, category_id FROM posts WHERE author_id=$current_user_id ORDER BY id DESC";

$posts = mysqli_query($connection, $query);
?>


<!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->
<section class="container main-s">
    <section class="dashboard">
        <?php if (isset($_SESSION['add-post-sucess'])) : // shows add user was sucessful
        ?>
            <div class="alert__message sucess container">
                <?= $_SESSION['add-post-sucess'];
                unset($_SESSION['add-post-sucess']); ?>
            </div>
        <?php elseif (isset($_SESSION['add-post'])) : // shows add user was sucessful
        ?>
            <div class="alert__message error container">
                <?= $_SESSION['add-post'];
                unset($_SESSION['add-post']); ?>
            </div>


        <?php elseif (isset($_SESSION['edit-post-sucess'])) : // shows edit user was sucessful
        ?>
            <div class="alert__message sucess container">
                <?= $_SESSION['edit-post-sucess'];
                unset($_SESSION['edit-post-sucess']); ?>
            </div>
        <?php elseif (isset($_SESSION['edit-post'])) : // shows edit user was sucessful
        ?>
            <div class="alert__message error container">
                <?= $_SESSION['edit-post'];
                unset($_SESSION['edit-post']); ?>
            </div>
        <?php elseif (isset($_SESSION['delete-post-sucess'])) : // shows delete user was sucessful
        ?>
            <div class="alert__message sucess container">
                <?= $_SESSION['delete-post-sucess'];
                unset($_SESSION['delete-post-sucess']); ?>
            </div>
        <?php endif ?>
        <div class="container dashboard__container">
            <div class="aside">
                <ul>
                    <li>
                        <h5><a href="add-post.php"><i class="uil uil-comment-alt-message"></i>Add Post</a></h5>
                    </li>
                    <li>
                        <a href="index.php" class="active"><i class="uil uil-align-left"></i>
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
                            <a href="manage-categories.php"><i class="uil uil-apps"></i>
                                <h5>Manage Categories</h5>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>


            </div>
            <div class="main">
                <h2>Manage Posts</h2>


                <?php if (mysqli_num_rows($posts) > 0) : ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                                <!-- //get categroy title of each post -->
                                <?php
                                $category_id = $post['category_id'];
                                $category_query = "SELECT title FROM categories WHERE id=$category_id";
                                $category_result = mysqli_query($connection, $category_query);
                                $category = mysqli_fetch_assoc($category_result);
                                ?>
                                <tr>
                                    <td><?= $post['title']; ?></td>
                                    <td>
                                        <?= $category['title']; ?>
                                    </td>
                                    <td><a href="<?= ROOT_URL ?>Admin/edit-post.php?id=<?= $post['id'] ?>" class="btn sm">Edit</a></td>
                                    <td><a href="<?= ROOT_URL ?>Admin/delete-post.php?id=<?= $post['id'] ?>" class="btn sm danger">delete</a></td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert__message error">
                        <h3><?= "NO POSTS FOUND!" ?></h3>
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
    * {
        color: white;
    }
</style>

</html>