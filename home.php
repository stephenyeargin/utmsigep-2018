<!doctype html>
<html lang="en">
  <head itemscope itemtype="http://schema.org/WebPage">
    <?php require_once(get_template_directory() . '/includes/meta.php'); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_header(); ?>

    <div class="home-header">
      <div class="container p-5 text-center">
        <div class="home-header-content">
          <h1 class="display-4 pt-5">
            Tennessee Kappa Alumni<br />
            &amp; Volunteer Corporation
          </h1>
          <ul class="list-inline display-2 pt-5 pb-5">
            <li class="list-inline-item"><a href="https://www.linkedin.com/company/tennessee-kappa-avc/" title="SigEp at UT Martin on LinkedIn"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/utmsigep" title="SigEp at UT Martin on Twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com/utmsigep/" title="SigEp at UT Martin on Facebook"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/utm_sigep/" title="SigEp at UT Martin on Instagram"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <?php if (have_posts()):  while (have_posts()): the_post(); ?>
        <div class="card">
          <div class="card-body">
            <?php the_title('<h2 class="mb-3">', '</h2>'); ?>
            <?php the_date('F j, Y', '<p class="text-muted">', '</p>'); ?>
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php else: ?>
        <!-- <p>No posts found!</p> -->
      <?php endif; ?>
    </div>

    <div class="container mt-5">
      <div class="card-columns">
        <?php dynamic_sidebar('home-page-content'); ?>
      </div>
    </div>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
