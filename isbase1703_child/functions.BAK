<?php //子テーマで利用する関数を書く
 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'olein-layout-content-sidebar', get_template_directory_uri() . '/layouts/content-sidebar.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'isbase-style', get_stylesheet_uri());
 
}