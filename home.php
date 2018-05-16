<?php
/**
 * Template Name: Home Page
 */
?>

<html lang="en">
  <head>
    <?php require_once(get_template_directory() . '/includes/meta.php'); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_header(); ?>

    <div class="home-header">
      <div class="container p-5 text-center">
        <div class="home-header-content">
          <h1 class="display-4 pt-5">
            Welcome to <span>Sigma Phi Epsilon</span> at<br />
            The University of Tennessee at Martin.
          </h1>
          <ul class="list-inline display-2 pt-5 pb-5">
            <li class="list-inline-item"><a href="https://twitter.com/utmsigep"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com/sigeptnkappa/"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/utm_sigep/"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="card-columns">
        <?php dynamic_sidebar('home-page-content'); ?>
      </div>
    </div>

    <?php $chapter_officers = get_option('chapter_officers'); ?>
    <?php if (isset($chapter_officers['items']) && is_array($chapter_officers['items']) && count($chapter_officers['items'])): ?>
    <div class="container home-officers mt-5 text-center">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <h3 class="mb-3"><?php echo __($chapter_officers['heading']); ?></h3>
          <div class="row">
            <?php foreach ($chapter_officers['items'] as $officer): ?>
            <div class="col-md-3 mb-3">
              <?php if ($officer['photo_url']): ?>
              <img src="<?php echo esc_attr($officer['photo_url']); ?>" alt="<?php echo esc_attr($officer['name']); ?>" class="img-fluid img-thumbnail mb-3" /><br />
              <?php endif ;?>
              <strong><?php echo __($officer['name']); ?></strong><br />
              <?php echo __($officer['title']); ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
