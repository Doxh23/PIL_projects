<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Le Pole Image de Liège</title>
    <?php wp_head();?>
</head>
<body>
   <header class="header">
        <div class="header__img ">
            <? if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }?>
            <img src="http://localhost/wordpress/wp-content/uploads/2021/09/logo-1.svg" alt="">
       </div>
       <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
       <?php ?>
   </header>
    <aside class="social__nav">
        <ul>
            <li>Fb</li>
            <li>Tw</li>
            <li>Lk</li>
            <li>In</li>
        </ul>
    </aside>
