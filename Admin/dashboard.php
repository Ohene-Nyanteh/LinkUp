<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users | LInkUp.com</title>
    <!--======================Style=============-->
    <link rel="stylesheet" href="../Style and Scripts\style.css">
    <link rel="stylesheet" href="../Style and Scripts\Resposnsive-style.css">
    <!--======================FONTS=======================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,700;0,800;1,100;1,400;1,600;1,900&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link rel="icon" href="Images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--=============================NAV================================-->
<header>
  <nav class="nav__container" id="header">
    <!--logo-->
    <a href="../blog.html"><img class="logo" src="../Images/logo_2.jpg" alt="logo"></a>
    <ul class="Nav-menu">
        <li class="nav-element"><a href="../blog.html" id="active">Blog</a></li>
        <li class="nav-element"><a href="../Others\about.html">About</a></li>
        <li class="nav-element"><a href="../Others\services.html">Services</a></li>
        <li class="nav-element"><a href="../Others\contact.html">Contact</a></li>
        <!-- <li class="nav-element"><a href="Sign-In and Log-out/sign-in.html">Sign In</a></li> -->
        <li class="dropdown">
            <a href="#"><img class="avatar" src="../Images/pic10.jpg" width="40" height="40"></a>
              <i class="fa fa-caret-down"></i>
            <div class="dropdown-content">
              <a href="#">Dashboard</a>
              <a href="#">Log Out</a>
            </div>
        </li>
    </ul>
  </nav>
</header>
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
                                <td><a href="Posts/edit-post.html" class="btn sm">Edit</a></td>
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
    <footer id="footer">
      <div class="footer__socials">
        <a href="https://youtube.com/ohene" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://discord.com/ohene" target="_blank"><i class="uil uil-discord"></i></a>
        <a href="https://twitter.com/ohene" target="_blank"><i class="uil uil-facebook"></i></a>
        <a href="https://instagram.com/ohene" target="_blank"><i class="uil uil-instagram"></i></a>
      </div>
      <div class="container footer__container">
        <article>
          <h4>Categories</h4>
          <ul>
            <li><a href="">Art</a></li>
            <li><a href="">Science and Technology</a></li>
            <li><a href="">Food</a></li>
            <li><a href="">Travel</a></li>
            <li><a href="">Music</a></li>
            <li><a href="">Wild life</a></li>
          </ul>
        </article>
        <article>
          <h4>Contact And Support</h4>
          <ul>
            <li><a href="">Online Support</a></li>
            <li><a href="">Contact us</a></li>
            <li><a href="">Emails</a></li>
            <li><a href="">Location</a></li>
            <li><a href="">Social Support</a></li>
            <li><a href="">Landmarks</a></li>
          </ul>
        </article>
        <article>
          <h4>Blog</h4>
          <ul>
            <li><a href="">Popular</a></li>
            <li><a href="">Featured</a></li>
            <li><a href="">Post</a></li>
            <li><a href="">Most Read</a></li>
            <li><a href="">Most Liked</a></li>
            <li><a href="">Recent</a></li>
          </ul>
        </article>
        <article>
          <h4>Permalinks</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="'">Contact</a></li>
            <li><a href="">Socials</a></li>
          </ul>
        </article>
      </div>
      <div class="footer__copyright">
        <small>Copyright &copy; 2022 Linkup.com</small>
      </div>
    </footer>
</body>
    <!--Script-->
    <script src="Style and Scripts\Main.js"></script>
    <style>
        *{
            color: white;
        }
    </style>
</html>

