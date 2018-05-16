<?php
/**
 * UT Martin SigEp 2018
 */

/**
 * Site-wide JavaScript
 */
function utmsigep_enqueue_scripts()
{
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', ['jquery'], '1.14.0', true);
  wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', ['jquery'], '4.1.0', true);
  wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.12/js/all.js', [], '5.0.12', true);
}
add_action('wp_enqueue_scripts', 'utmsigep_enqueue_scripts');

/**
 * Site-wide Styles
 */
function utmsigep_enqueue_styles()
{
  wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', [], '4.1.0');
  wp_enqueue_style('utmsigep', get_stylesheet_directory_uri() . '/assets/css/style.css', ['bootstrap']);
}
add_action('wp_enqueue_scripts', 'utmsigep_enqueue_styles');

/**
 * Theme Features
 */
function utmsigep_theme_features()
{
  // Add theme support for Automatic Feed Links
  add_theme_support('automatic-feed-links');

  // Add theme support for Featured Images
  add_theme_support('post-thumbnails');

  // Add theme support for HTML5 Semantic Markup
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

  // Add theme support for document Title tag
  add_theme_support('title-tag');
  
  // Add theme support for widgets
  add_theme_support('widgets');
}
add_action('after_setup_theme', 'utmsigep_theme_features');

/**
 * Site Sidebars
 */
function utmsigep_sidebars()
{
  register_sidebar([
    'name' => 'Home Page Content',
    'id' => 'home-page-content',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget card %2$s">',
    'after_widget' => '</div>' . PHP_EOL,
    'before_title' => '<!-- Widget: ',
    'after_title' => '-->'
  ]);

  register_sidebar([
    'name' => 'Page Sidebar',
    'id' => 'page-sidebar',
    'class' => '',
    'before_widget' => '<div id="%1$s" class="widget card mb-3 %2$s"><div class="card-body">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2 class="card-title">',
    'after_title' => '</h2>'
  ]);
}
add_action('after_setup_theme', 'utmsigep_sidebars');

/**
 * Site Menus
 */
function utmsigep_navigation_menus()
{
  $locations = [
    'main_site_navigation' => __('Pages linked in header of the site.', 'utmsigep'),
    'footer_site_navigation' => __('Pages linked in footer of the site.', 'utmsigep')
  ];
  register_nav_menus($locations);
}
add_action('init', 'utmsigep_navigation_menus');

/**
 * Bootstrap Navigation
 */
require_once get_template_directory() . '/lib/WP_Bootstrap_Navwalker.php';
