<? 
/*
* Template Name: Archives
*/
?>
<? get_header(); ?>

<div class="gauche">
        <h1><? the_title();?></h1>
        <!-- + menu accordeon categories -->
</div>
<div class="droite">
      <? get_search_form(); ?>
        <? if(have_rows('entreprises')) : while(have_rows('entreprises')) : the_row();
        $titre_ent = get_sub_field('titre_entreprise');
        $image_ent = get_sub_field('image_entreprise');
        $email_ent = get_sub_field('email_entreprise');
        $telephone_ent = get_sub_field('telephone_entreprise');
        $site_web_ent = get_sub_field('site_web_entreprise');
        $taxonomie_ent = get_sub_field('taxonomie_entreprise');?>
        <div class="secteur__entreprise">
                <h2><?= $titre_ent?></h2>
                <h6>
                        <?if(has_category()) : while(has_category()) : has_category();?>
                        <? var_dump($taxonomie_ent);?>
                        <? endwhile; endif; ?>
                </h6>
                <button class="secteur__accordion"><img src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="button flèche vers le bas"></button>
                <div class="secteur__panel">
                        <img src="<?= $image_ent?>" alt="<? echo $titre_ent?>">
                        <h6><?= $telephone_ent?></h6>
                        <h6><?= $email_ent?></h6>
                        <h6><?= $site_web_ent?></h6>
                </div>
        </div>
        <? endwhile; endif;?>
</div>

<? get_footer(); ?>