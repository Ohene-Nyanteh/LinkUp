<?php
include ('../Admin/Partials/Header.php');

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
}
else{
    header('location: '. ROOT_URL. 'Admin/manage-users.php');
    die();
}
?>

    <section class="form__section">
        <div class="form__section-container">
            <h2>Edit User</h2>
            <form action="<?= ROOT_URL ?>Admin/edit-user-logic.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name ="id" value="<?= $user['id']?>" >
                <input type="text" name ="firstname" value="<?= $user['firstname']?>" placeholder="First Name">
                <input type="text" name="lastname" value="<?= $user['lastname']?>" placeholder="Last Name">
                <input type="text" name ="username" value="<?= $user['username']?>" placeholder="Username">
                <select id="" name="userrole">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" name="submit" class="form-button">Edit User</button>
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
