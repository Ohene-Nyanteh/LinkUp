<?php
include 'Partials/Header.php';

//fetch featured post in database
$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connection, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);

// fetch nine post from table 
$post_query = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 9";
$posts = mysqli_query($connection, $post_query);



?>

<!--========================================================================
  ======================================================Main Page=====================================================
  ===========================================================================================================
  ===============================================================-->

<body>
  <main class="container">

    <!--==================================FEATURED==============================================-->
    <?php if (mysqli_num_rows($featured_result) === 1) : ?>
      <article class="Featured">
        <h2>FEATURED</h2>
        <section class="post_featured">

          <!--======================FEATURED POST_1==========================================-->
          <div><img src="Images/<?= $featured['thumbnail'] ?>" class="featured-post-image" width="350" height="300"></div>

          <!--===============================POST TEXT======================================-->
          <section class="post-text">
            <?php
            // fetch categorise from categories
            $category_id = $featured['category_id'];
            $category_query = "SELECT * FROM categories WHERE id=$category_id";
            $category_result = mysqli_query($connection, $category_query);
            $category = mysqli_fetch_assoc($category_result);
            ?>
            <section class="category">
              <h3><a href="<?= ROOT_URL ?>category-post.php?id=<?= $featured['category_id'] ?>"><?= $category['title'] ?></a></h3>
            </section>
            <h1><?= $featured['title'] ?></h1>
            <span class="text">
              <a href="<? ROOT_URL ?>post.php?id=<?= $featured['id'] ?>">
                <?= substr($featured['body'], 0, 200) ?>...
              </a>
            </span>
            <div class="meta-info-post">
              <?php

              $author_id = $featured['author_id'];
              $author_query = "SELECT * FROM users WHERE id=$author_id";
              $author_result = mysqli_query($connection, $author_query);

              $author = mysqli_fetch_assoc($author_result);

              ?>
              <img class="avatar_4" src="Images/<?= $author['avatar'] ?>" width="40" height="40">
              <div class="author-info">
                <h4><a href="#">By: <?= $author['username'] ?></a></h4>
                <small><?= date("M d, Y \\a\\t H:i a", strtotime($featured['date_time'])) ?></small>
              </div>
            </div>
          </section>
          </div>
        </section>
      </article>
    <?php endif ?>
    <!--================================================POST=================================================-->
    <section class="main-post">
      <h2>
        POSTS
      </h2>
      <section class="post-grid">
        <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
          <div class="gallery">

            <img class="posting" src="Images\<?= $post['thumbnail'] ?>" alt="Cinque Terre" width="600" height="400">
            <section class="category">
              <?php
              // fetch categorise from categories
              $category_id = $post['category_id'];
              $category_query = "SELECT * FROM categories WHERE id=$category_id";
              $category_result = mysqli_query($connection, $category_query);
              $post_category = mysqli_fetch_assoc($category_result);
              ?>
              <h3><?= $post_category['title'] ?></h3>
            </section>
            <div class="desc">
              <h3><a href="<?=ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
              <span class="text compliment_2">
                <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">
                  <?= substr($post['body'], 0, 300) ?>...
                </a>
              </span>
              <div class="meta-info-post">
                <?php

                $author_id = $post['author_id'];
                $author_query = "SELECT * FROM users WHERE id=$author_id";
                $author_result = mysqli_query($connection, $author_query);

                $author = mysqli_fetch_assoc($author_result);

                ?>
                <a href="#"><img class="avatar_4" src="Images/<?= $author['avatar']?>" width="40" height="40"></a>
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
      <?php while ($cat = mysqli_fetch_assoc($cat_result)): ?>
      <section class="cat">
        <h3><a href="<?= ROOT_URL?>category-posts.php?id=<?= $cat['id']?>"><?=$cat['title'] ?></a></h3>
      </section>
      <?php endwhile?>
    </div>
  </aside>


  <!--===============================FOOTER================================-->
  <?php
  include 'Partials/Footer.php';
  ?>
</body>
<!--Script-->
<script src="Style and Scripts\Main.js"></script>

</html>

