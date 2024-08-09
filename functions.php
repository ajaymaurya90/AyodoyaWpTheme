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

require_once AYODOYA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AYODOYA_DIR_PATH . '/inc/helpers/template-tags.php';

function ayodoya_get_theme_instance(){
    
    AYODOYA_THEME::get_instance();
}

ayodoya_get_theme_instance();


 ?>