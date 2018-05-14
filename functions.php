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
  add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'utmsigep_theme_features');

/**
 * Site Menus
 */
 // Register Navigation Menus
function utmsigep_navigation_menus()
{
  $locations = [
    'main_site_navigation' => __('Pages linked in header of the site.', 'text_domain'),
    'footer_site_navigation' => __('Pages linked in footer of the site.', 'text_domain'),
    'social_media_links' => __('Links to various social media properties', 'text_domain'),
  ];
  register_nav_menus($locations);
}
add_action('init', 'utmsigep_navigation_menus');

/**
 * Bootstrap Navigation
 */
require_once get_template_directory() . '/lib/WP_Bootstrap_Navwalker.php';
