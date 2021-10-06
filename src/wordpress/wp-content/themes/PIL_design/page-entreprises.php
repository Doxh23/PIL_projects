<? 
/*
* Template Name: Archives
*/
?>
<? get_header(); ?>

<?php 
// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
$args = array(
    'post_type' => 'post',
    'category_name' => 'films',
    'posts_per_page' => 3,
);

// 2. On exécute la WP Query
$my_query = new WP_Query( $args );

// 3. On lance la boucle !
if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
    
    the_title();
    the_content();
    the_post_thumbnail();

endwhile;
endif;

// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

?>






<section class="secteurs">
        <div class="gauche">
                <h1><? the_title();?></h1>
                <!-- + menu accordeon categories -->
        </div>
        <div class="droite">
        <? get_search_form(); ?>
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); 
                //var_dump($post);
                the_title();?>

                        <div class="secteur__entreprise">
                                <button class="secteur__accordion">
                                        <div class="secteur__titre">
                                                <h2><? the_field('nom__entreprise')?></h2>
                                                <?php foreach(get_field('taxonomie_entreprise') as $data){ ?>
                                                        <h6> <?php echo $data;?></h6>
                                                <? }?>
                                        </div>
                                        <img class="secteur__btn" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="button flèche vers le bas">
                                </button>            
                                <div class="secteur__panel">
                                        <img class="secteur__img" src="<? the_field('image_entreprise')?>" alt="<? the_field('nom__entreprise')?>">
                                        <div class="secteur__info">
                                                <h6><? the_field('telephone_entreprise')?></h6>
                                                <h6><? the_field('email_entreprise')?></h6>
                                                <h6>
                                                        <a href="<? the_field('site_web_entreprise')?>">
                                                        <? the_field('site_web_entreprise')?>
                                                        </a>
                                                </h6>
                                                <p><? the_field('description_entreprise')?></p>
                                        </div>
                                </div>
                        </div>
                <? endwhile; endif;?>
        </div>
</section>
<? get_footer(); ?>