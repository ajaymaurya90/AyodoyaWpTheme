<?php

/**
 * Register Menus
 * 
 * @package Ayodoya
 */

 namespace AYODOYA_THEME\Inc;

use AYODOYA_THEME\Inc\Traits\Singleton;

 class Menus{
    use Singleton;

    protected function __construct(){
        // Load classes
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        // Actions and filters
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus(){
        register_nav_menus([
            'ayodoya-header-menu' => esc_html__('Header Menu', 'ayodoya'),
            'ayodoya-footer-menu' => esc_html__('Footer Menu', 'ayodoya'),
        ]);
    }

    public function get_menu_id($location){
        // Get all the locations
        $locations = get_nav_menu_locations();
        
        // Get object id by location
        $menu_id = $locations[$location];

        return ! empty($menu_id) ? $menu_id : '';
        
    }

    public function get_child_menu_item($menus_array, $parent_id){

        $child_menus = [];
        if(!empty($menus_array) && is_array($menus_array)){
            foreach($menus_array as $menu){
                if(intval($menu->menu_item_parent)=== $parent_id){
                    array_push($child_menus, $menu);
                }
            }
        }
        return $child_menus;
    }
}