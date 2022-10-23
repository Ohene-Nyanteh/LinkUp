<?php
include ('Partials/Header.php');
?>
    <!--====================================End of Nav=======================-->
    
    <!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->
    <section class="container main-s">
        <section class="dashboard">
            <div class="container dashboard__container">
                <div class="aside">
                    <ul>
                        <li>
                            <h5><a href="add-post.php"><i class="uil uil-comment-alt-message"></i>Add Post</a></h5>
                        </li>
                        <li>
                          <a href="index.php"><i class="uil uil-align-left"></i><h5>Manage Post</h5></a>
                        </li>
                        <li>
                            <a href="add-user.php"><i class="uil uil-user-plus"></i><h5>Add User</h5></a>
                        </li>
                        <li>
                            <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i><h5>Manage Users</h5></a>
                        </li>
                        <li>
                            <a href="add-category.php"><i class="uil uil-book-medical"></i><h5>Add Category</h5></a>
                        </li>
                        <li>
                            <a href="manage-categories.php"><i class="uil uil-apps"></i><h5>Manage Categories</h5></a>
                        </li>
                 </ul>


                </div>
                <div class="main">
                    <h2>Manage Users</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Delete</th>
                                <th>admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: white;">Ohene</td>
                                <td><a href="edit-user.php" class="btn sm">Spark</a></td>
                                <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                <td><a href="#"class="btn sm">No</a></td>
                            </tr>

                            <tr>
                                <td style="color: white;">Christabel</td>
                                <td><a href="edit-user.php" class="btn sm">Spark</a></td>
                                <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                <td><a href="#"class="btn sm">No</a></td>
                            </tr>

                            <tr>
                                <td style="color: white;">Kupa</td>
                                <td><a href="edit-user.php" class="btn sm">Spark</a></td>
                                <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                                <td><a href="#"class="btn sm">No</a></td>
                            </tr>

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
        .avatar{
    background-color: var(--color-primary);
    border-radius: 50%;
    padding: 0;
    margin-top: 1rem;
    margin-right: 1rem;
    display: block;
}
    </style>
</html>

