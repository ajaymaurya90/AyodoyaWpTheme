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

    protected function __construct()
    {
        // Load classes
        $this->set_hooks();

    }

    protected function set_hooks(){
        // Actions and filters
    }
}
?>
