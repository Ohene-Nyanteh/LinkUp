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
                            <h5><a href="../Posts/add-post.html"><i class="uil uil-comment-alt-message"></i>Add Post</a></h5>
                        </li>
                        <li>
                          <a href="dashboard.html" class="active"><i class="uil uil-align-left"></i><h5>Manage Post</h5></a>
                        </li>
                        <li>
                            <a href="Users/add-user.html"><i class="uil uil-user-plus"></i><h5>Add User</h5></a>
                        </li>
                        <li>
                            <a href="Users/manage-users.html" ><i class="uil uil-users-alt"></i><h5>Manage Users</h5></a>
                        </li>
                        <li>
                            <a href="Categories/add-category.html"><i class="uil uil-book-medical"></i><h5>Add Category</h5></a>
                        </li>
                        <li>
                            <a href="Categories/manage-categories.html"><i class="uil uil-apps"></i><h5>Manage Categories</h5></a>
                        </li>
                 </ul>


                </div>
                <div class="main">
                    <h2>Manage Users</h2>
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
                                <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                                <td><a href="Posts/delete-post.html" class="btn sm danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="Posts/edit-post.html" class="btn sm">Edit</a></td>
                                <td><a href="Posts/delete-post.html" class="btn sm danger">delete</a></td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                <td>Wild Life</td>
                                <td><a href="Posts/edit-post.html" class="btn sm">Edit</a></td>
                                <td><a href="Posts/delete-post.html" class="btn sm danger">delete</a></td>
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

