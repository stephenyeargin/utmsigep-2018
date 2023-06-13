<footer class="mt-5">
  <div class="container text-center clearfix">
    <div class="p-3">
      <a href="/" title="Return to Home Page"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sigep-logo-inverse.svg" class="img-fluid" alt="Sigma Phi Epsilon (SigEp)" /></a>
    </div>

    <div class="footer-navigation-menu">
    <?php wp_nav_menu([
      'menu' => 'footer_site_navigation',
    ]); ?>
    </div>

    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://twitter.com/utmsigep" title="SigEp at UT Martin on Twitter"><i class="fab fa-twitter"></i></a></li>
      <li class="list-inline-item"><a href="https://www.facebook.com/utmsigep/" title="SigEp at UT Martin on Facebook"><i class="fab fa-facebook"></i></a></li>
      <li class="list-inline-item"><a href="https://www.instagram.com/utm_sigep/" title="SigEp at UT Martin on Instagram"><i class="fab fa-instagram"></i></a></li>
      <li class="list-inline-item">|</li>
      <li class="list-inline-item"><a href="http://sigep.org">SigEp.org</a></li>
      <li class="list-inline-item"><a href="https://www.utm.edu">UT Martin</a></li>
    </ul>
    <p class="small">
      All Content &copy; Tennessee Kappa Chapter of Sigma Phi Epsilon at the University of Tennessee at Martin
    </p>
    <br />
  </div>
</footer>
