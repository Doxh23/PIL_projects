<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Le Pole Image de Liège</title>
    <?php wp_head();?>
</head>
<body  <?php body_class(); ?>>
   <header class="header">
        <div class="header__img ">
            <img src="http://localhost/wordpress/wp-content/uploads/2021/09/logo-1.svg" alt="">
            <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
        </div>
        <div class="header__menu">
            <?php wp_nav_menu( array( 'theme_location' => 'contact' ) );?>
            <img class="arrow__contact" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-conctact.svg" alt="Contact Arrow">
       </div>
   </header>
   <main>
    <aside class="social__nav">
        <ul class="social_nav__ul">
            <li class="social_nav__li"><a href="http://www.facebook.com">Fb</a></li>
            <li class="social_nav__li"><a href="http://www.twitter.com">Tw</a></li>
            <li class="social_nav__li"><a href="http://www.linkedin.com">Lk</a></li>
            <li class="social_nav__li"><a href="http://www.intagram.com">In</a></li>
        </ul>
    </aside>
