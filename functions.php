<?php 
    
    function wp_head_hook(){
        get_header();
    }

    add_action('wp_head', 'wp_head_hook');

?>