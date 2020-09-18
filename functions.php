<?php 
    
add_theme_support('post-thumbnails');

    function wp_head_hook() {
        // lägger till style.css filen
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_script('script', get_template_directory_uri().'/egetTema.js');
    }

add_action ('wp_head', 'wp_head_hook');


function wpb_custom_new_menu(){
    register_nav_menu('header_menu',__( 'Header menu' ));
    register_nav_menu('footer_menu',__( 'Footer menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );


add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

/* Register dynamic sidebar 'new_sidebar' */
    register_sidebar(
        array(
        'id' => 'new_sidebar',
        'name' => __( 'New Sidebar' ),
        'description' => __( 'A short description of the sidebar.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    )
    );
}

/*

function wp_foot_hook() {

    get_footer();


}

add_action('wp_footer', 'wp_foot_hook');*/

?>
