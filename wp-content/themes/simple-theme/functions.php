<?php

  
function bzs_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/css/index.css' );
}
add_action( 'wp_enqueue_scripts', 'bzs_theme_enqueue_styles' );


function bzs_register_nav (){

    register_nav_menus(array(
        'primary' => __("Primary Menu"),
        'footer1' => __("Footer Menu"),
        'footer2' => __("Footer Menu 2"),
    ));
}

add_action('init',"bzs_register_nav");

function bzs_theme_supports(){
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);

}





add_action('after_setup_theme', 'bzs_theme_supports');