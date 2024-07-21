<?php
/**
 * Theme Functions
 * 
 * @package Ayodoya
 */

use AYODOYA_THEME\Inc\AYODOYA_THEME;

if(!defined('AYODOYA_DIR_PATH')){
    define('AYODOYA_DIR_PATH', untrailingslashit(get_template_directory()));
}
// echo '<pre>';
// print_r(AYODOYA_DIR_PATH);
// wp_die();

require_once AYODOYA_DIR_PATH . '/inc/helpers/autoloader.php';

function ayodoya_get_theme_instance(){
    
    AYODOYA_THEME::get_instance();
}

ayodoya_get_theme_instance();


 function ayodoya_enqueue_scripts(){
    // Register Style
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( get_template_directory().'/style.css' ), 'all' );
    wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
    
    // Register Script
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime( get_template_directory().'/assets/main.js' ), true);
    wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    // Enqueue Style
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    
    // Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

 }

 add_action('wp_enqueue_scripts','ayodoya_enqueue_scripts' );

 ?>