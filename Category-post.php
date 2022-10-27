<?php
include 'Partials/Header.php';

if (isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT * FROM posts WHERE category_id=$id ORDER BY date_time DESC";
  $posts = mysqli_query($connection, $query);

  $post_query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 9";
  $posts = mysqli_query($connection, $post_query);

  $featured_query = "SELECT * FROM posts WHERE is_featured=1";
  $featured_result = mysqli_query($connection, $featured_query);
  $featured = mysqli_fetch_assoc($featured_result);
} else {
  header('location: ' . ROOT_URL . 'blog.php');
  die();
}
?>

<body>
  <!--====================================End of Nav=======================-->

  <!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->
  <main class="container">
    <!--================================================POST=================================================-->
    <section class="main-post">
      <div class="category__title">
        <?php
        // fetch categorise from categories
        $category_id = $id;
        $category_query = "SELECT * FROM categories WHERE id=$category_id";
        $category_result = mysqli_query($connection, $category_query);
        $category = mysqli_fetch_assoc($category_result);
        ?>
        <h2><?= $category['title']?></h2>
      </div>
      <section class="main-post">
        <h2>
          POSTS
        </h2>
        <section class="post-grid">
          <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
            <div class="gallery">

              <img class="posting" src="Images\<?= $post['thumbnail'] ?>" alt="Cinque Terre" width="600" height="400">
              <div class="desc">
                <h3><a href="<?= ROOT_URL ?>post.php?id=<?= $post['category_id'] ?>"><?= $post['title'] ?></a></h3>
                <span class="text compliment_2">
                  <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">
                    <?= substr($post['body'], 0, 300) ?>...
                  </a>
                </span>
                <div class="meta-info-post">
                  <?php

                  $author_id = $featured['author_id'];
                  $author_query = "SELECT * FROM users WHERE id=$author_id";
                  $author_result = mysqli_query($connection, $author_query);

                  $author = mysqli_fetch_assoc($author_result);

                  ?>
                  <a href="#"><img class="avatar_4" src="Images/<?= $author['avatar'] ?>" width="40" height="40"></a>
                  <div class="author-info">
                    <h4><a href="#">By: <?= $author['username'] ?></a></h4>
                    <small><?= date("M d, Y \\a\\t H:i a", strtotime($post['date_time'])) ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile ?>
          <!--===================POST 1==============================-->
        </section>
  </main>
  <aside>
    <div class="middle-element container">
      <?php
      $all_categories = "SELECT * FROM categories";
      $cat_result = mysqli_query($connection, $all_categories);

      ?>
      <?php while ($cat = mysqli_fetch_assoc($cat_result)) : ?>
        <section class="cat">
          <h3><a href="<?= ROOT_URL ?>category-posts.php?id=<?= $cat['id'] ?>"><?= $cat['title'] ?></a></h3>
        </section>
      <?php endwhile ?>
    </div>
  </aside>
  </section>
  </main>


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

