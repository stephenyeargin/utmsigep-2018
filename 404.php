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
            <div class="card-body">
              <h2 class="card-title">Error 404</h2>
              <p class="card-text lead">We cannot seem to locate the page you were looking for. It may have moved to another URL (and we didn't redirect you correctly) or it was deleted (and there isn't a replacement). <em>Either way, we let you down. Sorry about that.</em></p>
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
