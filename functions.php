<?php 
    
    add_theme_support( 'post-thumbnails' );

function wp_head_hook() {

         wp_enqueue_style('style', get_stylesheet_uri());
    
}
add_action ( 'wp_head', 'wp_head_hook' );
/*

function wp_foot_hook() {

    get_footer();


}

add_action('wp_footer', 'wp_foot_hook');*/

?>
