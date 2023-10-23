<?php 
// function shipping_theme(){
//     // navbar function
//     add_theme_support("post-thumbnails");
//     add_theme_support("menus");
//     register_nav_menus( array(
//         'main_menu'=> __('main menu','Trisha'), 
//         'top_menu'=> __('top menu','Trisha'),
//         'footer_menu'=> __('footer menu','Trisha'),
//     ) );

// }

// add_action('after_theme_setup','shipping_theme');

function shipping_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'Ship' ),
        'top_menu'  => __( 'Top Menu', 'Ship' ),
        'footer_menu'  => __( 'Footer Menu', 'Ship' ),
    ) );
}

add_action('after_setup_theme' , 'shipping_setup');


?>