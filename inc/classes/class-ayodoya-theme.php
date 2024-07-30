<?php

/**
 * Bootstraps the Ayodoya Theme
 * 
 * @package Ayodoya
 */

namespace AYODOYA_THEME\Inc;

use AYODOYA_THEME\Inc\Traits\Singleton;

class AYODOYA_THEME
{
    use Singleton;


    protected function __construct(){
        // Load classes

        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks(){
        // Actions and filters
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support('title-tag');

        add_theme_support('custom-logo', [
            'header-text'          => array( 'site-title', 'site-description' ),
            'height'               => 100,
		    'width'                => 400,
		    'flex-height'          => true,
		    'flex-width'           => true,
		    'unlink-homepage-logo' => true,

        ]);

        add_theme_support( 'custom-background', [
            'default-color'      => '0000ff',
            'default-image'      => '',
            'default-position-x' => 'center',
            'default-position-y' => 'top',
            'default-repeat'     => 'no-repeat',
        ] );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support(
            'html5', [
                'caption',
                'comment-form',
                'comment-list',
                'gallery',
                'search-form',
                'script',
                'style',
            ]
        );

        add_editor_style();

        add_theme_support('wp-block-style');

        add_theme_support('align-wide');

        global $content_width;
        if(!isset($content_width)){
            $content_width = 1240;
        }

    }
}
