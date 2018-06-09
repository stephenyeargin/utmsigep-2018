<?php 
/**
 * Template Name: Default Page Layout (2-column)
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
          <?php if (have_posts()):  while (have_posts()): the_post(); ?>
          <div class="card">
            <?php if (has_post_thumbnail()): ?>
            <div class="card-img">
              <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
            </div>
            <?php endif; ?>
            <div class="card-body">
              <div class="post-title"><?php the_title('<h2 class="mb-4">', '</h2>'); ?></div>
              <div class="post-content">
                <?php the_content(); ?>
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
