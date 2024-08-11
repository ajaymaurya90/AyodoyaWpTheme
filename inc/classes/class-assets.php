<?php

/**
 * Enqueue Theme Assets
 * 
 * @package Ayodoya
 */

 namespace AYODOYA_THEME\Inc;

use AYODOYA_THEME\Inc\Traits\Singleton;

 class Assets{
    use Singleton;

    protected function __construct(){
        // Load classes
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        // Actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles(){
        // Register Style
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(AYODOYA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', AYODOYA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        // Enqueue Style
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts(){
        // Register Script
        wp_register_script('main-js', AYODOYA_DIR_URI . '/assets/main.js', ['jquery'], filemtime(get_template_directory() . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', AYODOYA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
        wp_register_script('bootstrap-bundle-js', AYODOYA_DIR_URI . '/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);

        // Enqueue Scripts
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('bootstrap-bundle-js');
    }
 }