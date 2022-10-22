<?php
include ('Partials/Header.php');
?>

    <section class="form__section">
        <div class="form__section-container">
            <h2>Edit User</h2>
            <div class="alert__message sucess">
                <p>This is an Sucess message</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <select id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" class="form-button">Add User</button>
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
