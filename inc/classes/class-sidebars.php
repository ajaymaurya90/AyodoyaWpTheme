<?php 
/**
 * Theme Sidebars
 * 
 * @package Ayodoya
 * 
 */

 namespace AYODOYA_THEME\Inc;

use AYODOYA_THEME\Inc\Traits\Singleton;

 class Sidebars{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks (){
        /**
         * Actions
         */
        add_action('widgets_init', [ $this, 'register_ayodoya_sidebars'] );
        add_action('widgets_init', [ $this, 'register_clock_widget'] );
    }

    public function register_ayodoya_sidebars (){
        register_sidebar([
            'name'          => __('Ayodoya Blog Sidebar', 'ayodoya'),
            'id'            => 'sidebar-1',
            'description'   => __('Main sidebar', 'ayodoya'),
            'before-widget' => '</div>',
            'after-widget'  => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'before-title'  => '<h3 class="widget-title"',
            'afetr-title'   => '</h3>'
        ]);

        register_sidebar([
            'name'          => __('Ayodoya Footer Sidebar', 'ayodoya'),
            'id'            => 'sidebar-2',
            'description'   => __('Footer sidebar', 'ayodoya'),
            'before-widget' => '</div>',
            'after-widget'  => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'before-title'  => '<h3 class="widget-title"',
            'afetr-title'   => '</h3>'
        ]);
    }

    public function register_clock_widget (){
        register_widget('AYODOYA_THEME\Inc\Clock_Widget');
    }

 }

?>