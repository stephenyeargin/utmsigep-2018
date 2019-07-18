<?php 
/**
 * Template Name: Error 404
 */
?>
<!doctype html>
<html lang="en">
  <head>
    <?php require_once(get_template_directory() . '/includes/meta.php'); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="img-top text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/balanced-man-cat-in-the-hat.png" class="w-50 m-4 img-fluid" alt="Cat in the Hat Balanced Man" />
            </div>
            <div class="card-body">
              <h2 class="card-title">Error 404</h2>
              <p class="card-text lead">We looked over here, we looked over there! But we couldn't find your content anywhere!</p>
              <p class="card-text lead">Use the search form below to keep looking.</p>
              <?php get_search_form(); ?>
            </div>
          </div>
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
