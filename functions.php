<?php 
    
    function wp_head_hook(){
        get_header();
    }

    add_action('wp_head', 'wp_head_hook');

    // function wp_style(){
    //     function addMyScript() {
    //         wp_enqueue_style('egetTema', get_bloginfo('template_directory').'/style.less', array('blueprint'), '', 'screen, projection');
    //     }
    //     add_action('wp_head', 'addMyScript');
    // }

    // function wp_enqueue_script(){

    // }
?>
