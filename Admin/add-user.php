<?php
include('Partials/Header.php');
session_start();
$firstname = $_SESSION['add-user-data']['firstname'] ?? null;
$lastname = $_SESSION['add-user-data']['lastname'] ?? null;
$username = $_SESSION['add-user-data']['username'] ?? null;
$email = $_SESSION['add-user-data']['email'] ?? null;
$createpassword = $_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;
?>

<section class="form__section">
    <div class="form__section-container extra">
        <h2>Add User</h2>
        <?php
        if (isset($_SESSION['add-user'])) : ?>
        <div class="alert__message error">
            <p>
                <?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']);
                    ?>
            </p>
        </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>Admin/add-user-logic.php" method="post" enctype="multipart/form-data">
            <input type="text" name="firstname" value="<?=$firstname ?>" placeholder="First Name">
            <input type="text" value="<?=$lastname ?>" name="lastname" placeholder="Last Name">
            <input type="text" name="username" value="<?=$username ?>" placeholder="Username">
            <input type="email" value="<?=$email ?>" name="email" placeholder="Email">
            <input type="password" name="createpassword" value="<?=$createpassword ?>" placeholder="Create Password">
            <input type="password" name="confirmpassword" value="<?=$confirmpassword ?>"
                placeholder="Confirm password">
            <select id="" name="userrole">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar" class="user_avatar">User Avatar</label>
                <input type="file" id="avatar" name="avatar">
            </div>
            <button type="submit" name="submit" class="form-button">Add User</button>
        </form>
    </div>
</section>
</body>

</html>

</div>
</section>

<?php
include('../Partials/Footer.php');
?>
</body>

</html>