<?php
include('Partials/Header.php');

// fetch all users except current user
$current_admin_id = $_SESSION['user-id'];
$query = "SELECT * FROM users WHERE NOT id=$current_admin_id";

$users = mysqli_query($connection, $query);
?>
<!--====================================End of Nav=======================-->

<!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->
<section class="container main-s">
    <section class="dashboard">
        <?php if (isset($_SESSION['add-user-sucess'])) : // shows add user was sucessful?>
        <div class="alert__message sucess container">
            <?= $_SESSION['add-user-sucess'];
                unset($_SESSION['add-user-sucess']);?>
        </div>
        <?php elseif (isset($_SESSION['edit-user-sucess'])) : // shows add user was sucessful?>
        <div class="alert__message sucess container">
            <?= $_SESSION['edit-user-sucess'];
                unset($_SESSION['edit-user-sucess']);?>
        </div>
        <?php elseif (isset($_SESSION['edit-user'])) : // shows eidt user was unsucessful?>
        <div class="alert__message error container">
            <?= $_SESSION['edit-user'];
                unset($_SESSION['edit-user']);?>
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
                        <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
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
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($user = mysqli_fetch_assoc($users)) : ?>
                        <tr>
                            <td style="color: white;"><?= "{$user['firstname']}  {$user['lastname']}"; ?></td>

                            <td style="color: white;"><?= $user['username'];?></a></td>

                            <td><a href="<?=ROOT_URL?>Admin/edit-user.php?id=<?= $user['id'] ?>" class="btn sm">Edit</a></td>

                            <td><a href="<?=ROOT_URL?>Admin/delete-user.php?id=<?= $user['id']?>" class="btn sm danger">Delete</a></td>

                            <td style="color: white;"><?= $user['is_admin']? 'Yes' : 'No' ?></a></td>
                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
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