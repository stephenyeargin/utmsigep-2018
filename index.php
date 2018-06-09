<!doctype html>
<html lang="en">
  <head itemscope itemtype="http://schema.org/WebPage">
    <?php require_once(get_template_directory() . '/includes/meta.php'); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
          // Simple rendering of post content
          if (have_posts()) {
            while (have_posts()) {
              // Loads the post content
              the_post();
              // Renders the post title
              the_title('<h2>', '</h2>');
              // Renders the post content
              the_content();
            }
            the_posts_pagination();
          }
          else {
            echo 'No posts found.';
          }
          ?>
        </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
