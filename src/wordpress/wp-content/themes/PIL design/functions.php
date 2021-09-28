<?
//lier les pages css et php ensemble
function register_assets() {
    wp_register_style('style', get_stylesheet_uri('style.css'));
    wp_enqueue_style('style');
    wp_register_script('LogoAnim', './JS/script.js');
    wp_enqueue_script('LogoAnim');
}

//appeller la liaison entre css et php
add_action('wp_enqueue_scripts', 'register_assets');

register_nav_menus( array(
	'main' => 'Menu_header',
	'header' => 'Haut de page',
));