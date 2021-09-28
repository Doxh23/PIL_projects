<?
//lier les pages css et php ensemble
function register_assets() {
    wp_register_style('style', get_stylesheet_uri('style.css'));
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'register_assets');