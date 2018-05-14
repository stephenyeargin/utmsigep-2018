<footer class="mt-5">
  <div class="container text-center clearfix">
    <div class="p-3">
      <a href="{% link index.html %}"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sigep-logo-inverse.svg" class="img-fluid" /></a>
    </div>

    <?php wp_nav_menu([
      'theme_location'  => 'footer_site_navigation',
      'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
      'container'       => false,
      'menu_class'      => 'nav m-auto',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    ]); ?>

    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://twitter.com/utmsigep"><i class="fab fa-twitter"></i></a></li>
      <li class="list-inline-item"><a href="https://www.facebook.com/sigeptnkappa/"><i class="fab fa-facebook"></i></a></li>
      <li class="list-inline-item"><a href="https://www.instagram.com/utm_sigep/"><i class="fab fa-instagram"></i></a></li>
      <li class="list-inline-item">|</li>
      <li class="list-inline-item"><a href="http://sigep.org">SigEp.org</i></a></li>
      <li class="list-inline-item"><a href="http://utmartin.edu">UT Martin</a></li>
    </ul>
    <p class="small">
      All Content &copy; Tennessee Kappa Chapter of Sigma Phi Epsilon at The University of Tennessee at Martin
    </p>
    <br />
  </div>
</footer>
