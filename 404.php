<?php 
/**
 * Template Name: Error 404
 */
?>
<!doctype html>
<html lang="en">
  <head>
    <?php require_once(get_template_directory() . '/includes/meta.php'); ?>
    <title>404 - Not Found</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Chewy&display=swap" rel="stylesheet"> 
    <style>
    .lead-404 { font-family: 'Chewy', cursive; font-size: 2em; margin-bottom: 2em; margin-top: 2em; }
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
            <div class="card-body text-center">
              <h2 class="card-title">Error 404</h2>
              <hr />
              <p class="card-text lead-404 text-left">We looked over here!</p>
              <p class="card-text lead-404 text-right">We looked over there!</p>
              <p class="card-text lead-404">But we couldn't find your content anywhere!</p>
              <hr />
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
