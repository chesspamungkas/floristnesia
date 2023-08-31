<?php

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if (!function_exists('floristnesia_styles')) :

    function floristnesia_styles()
    {
        wp_enqueue_style('floristnesia-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }

endif;

add_action('wp_enqueue_scripts', 'floristnesia_styles');
