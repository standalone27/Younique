<?php
/**
 * @package Make Child
 *
 * Add your custom functions here.
 */


function add_custom_scripts() {
    $scriptsrc = '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'; 
    wp_register_script( 'modernizr', $scriptsrc );
    wp_enqueue_script( 'modernizr' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );