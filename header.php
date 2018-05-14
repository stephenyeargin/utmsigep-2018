<header class="">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sigep-logo-inverse.svg" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_nav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php wp_nav_menu([
        'theme_location'  => 'main_site_navigation',
        'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'header_nav',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      ]); ?>
      <span class="navbar-text">
        <a class="external" href="https://www.utm.edu/">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ut-martin-primary-stacked-inverse.svg" class="" alt="">
        </a>
      </span>
    </div>
  </nav>
</header>
