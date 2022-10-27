<?php
include 'Partials/Header.php';

//fetch post from database if Id is set
if (isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT * FROM posts WHERE id=$id";
  $result = mysqli_query($connection, $query);
  $post = mysqli_fetch_assoc($result);

  // fetch featured post in database
  $featured_query = "SELECT * FROM posts WHERE is_featured=1";
  $featured_result = mysqli_query($connection, $featured_query);
  $featured = mysqli_fetch_assoc($featured_result);
} else {
  header('locattion: ' . ROOT_URL . 'blog.php');
}
?>

<body>
  <!--====================================End of Nav=======================-->

  <!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->
  <section class="container">
    <div class="container singlepost__container">
      <h2><?= $post['title'] ?></h2>
      <?php

      $author_id = $featured['author_id'];
      $author_query = "SELECT * FROM users WHERE id=$author_id";
      $author_result = mysqli_query($connection, $author_query);

      $author = mysqli_fetch_assoc($author_result);

      ?>
      <div class="meta-info-post">
        <a href="#"><img class="avatar_4" src="Images/<?= $author['avatar'] ?>" width="40" height="40"></a>
        <div class="author-info">
          <h4><a href="#">By: <?= $author['username'] ?></a></h4>
          <small><?= date("M d, Y \\a\\t H:i a", strtotime($post['date_time'])) ?></small>
        </div>
      </div>
      <div class="singlepost__thumbnail">
        <img src="Images/<?=$post['thumbnail'] ?>" width="400" height="300">
      </div>
      <p>
        <?= $post['body']?>
      </p>
    </div>

  </section>



  <!--===============================FOOTER================================-->
  <?php
  include 'Partials/Footer.php';
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