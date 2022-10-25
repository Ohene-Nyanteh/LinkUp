<?php
include ('../Admin/Partials/Header.php');
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
                          <a href="index.php" class="active"><i class="uil uil-align-left"></i><h5>Manage Post</h5></a>
                        </li>

                        <?php 
                        if(isset($_SESSION['user_is_admin'])): ?>
                        <li>
                            <a href="add-user.php"><i class="uil uil-user-plus"></i><h5>Add User</h5></a>
                        </li>
                        <li>
                            <a href="manage-users.php" ><i class="uil uil-users-alt"></i><h5>Manage Users</h5></a>
                        </li>
                        <li>
                            <a href="add-category.php"><i class="uil uil-book-medical"></i><h5>Add Category</h5></a>
                        </li>
                        <li>
                            <a href="manage-categories.php"><i class="uil uil-apps"></i><h5>Manage Categories</h5></a>
                        </li>
                        <?php endif?>
                 </ul>


                </div>
                <div class="main">
                    <h2>Manage Posts</h2>
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
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-post.php" class="btn sm danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-post.php" class="btn sm danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                                <td><a href="delete-post.php" class="btn sm danger">delete</a></td>
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
        *{
            color: white;
        }
    </style>
</html>

