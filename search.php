<?php 
/**
 * Template Name: Search Results
 */
?>
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
          <h2>Search Results</h2>
          <?php if (have_posts()):  while (have_posts()): the_post(); ?>
          <div class="card mb-2">
            <div class="card-body">
              <div class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title('<h4 class="">', '</h4>'); ?></a></div>
              <div class="post-content">
                <p><a href="<?php echo the_permalink(); ?>"><?php echo the_permalink(); ?></a></p>
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php the_posts_pagination(); ?>
          <?php else: ?>
          <p>No posts found.</p>
          <?php endif; ?>
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
