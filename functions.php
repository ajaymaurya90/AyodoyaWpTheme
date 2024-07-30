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

if(!defined('AYODOYA_DIR_URI')){
    define('AYODOYA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
// echo '<pre>';
// print_r(AYODOYA_DIR_PATH);
// wp_die();

require_once AYODOYA_DIR_PATH . '/inc/helpers/autoloader.php';

function ayodoya_get_theme_instance(){
    
    AYODOYA_THEME::get_instance();
}

ayodoya_get_theme_instance();


 ?>