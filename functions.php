<?php
/**
* Theme Functions.
* @package Aquila
*/
if(!defined('AQUILA_DIR_PATH')) {
  define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}
require_once AQUILA_DIR_PATH.'/inc/helpers/autoloader.php';
function aquila_get_theme_instance() {
  \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();
function aquila_enqueue_scripts() {
  // Register Styles
  wp_register_style('main-css', get_template_directory_uri().'/css/main.css');
  wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all');
  wp_register_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', [], false, 'all');
  // Register Scripts
  wp_register_script('main-js', get_template_directory_uri().'/js/main.js', [] , filemtime(get_template_directory() .'/js/main.js'), true);
  wp_register_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', ['jquery'] , false, true);
  // Enqueue Styles
  wp_enqueue_style('bootstrap-css');
  wp_enqueue_style('style-css');
  wp_enqueue_style('main-css');
  // Enqueue Scripts
  wp_enqueue_script('bootstrap-js');
  wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
 ?>
