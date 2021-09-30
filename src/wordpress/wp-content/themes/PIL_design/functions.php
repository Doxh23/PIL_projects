<?
//lier les pages css et php ensemble
function register_assets()
{
    wp_register_style('style', get_stylesheet_uri('style.css'));
    wp_enqueue_style('fonts', get_template_directory_uri() . '/resources/fonts/II Vorkurs/stylesheet.css', NULL, microtime(), 'all');
    wp_enqueue_style('style');

    wp_register_script('LogoAnim', './JS/script.js');
    wp_enqueue_script('LogoAnim');
}

//appeller la liaison entre css et php
add_action('wp_enqueue_scripts', 'register_assets');

function wpc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'wpc_mime_types');
//appeller la liaison entre css et php
add_action('wp_enqueue_scripts', 'register_assets');


register_nav_menus(array(
    'main' => 'Menu_header',
    'header' => 'Haut de page',
));

function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');