<? 
/*
* Template Name: Archives
*/
?>
<? get_header(); ?>
<section class="secteurs">
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
                ?>
                <div class="secteur__entreprise">
                        <div class="secteur__titre">
                                <div class="secteur__taxo">
                                        <h2><?= $titre_ent?></h2>
                                        <?php foreach(get_sub_field('taxonomie_entreprise') as $data){ ?>
                                                <h6> <?php echo $data;?></h6>
                                        <? }?>
                                </div>
                                <div class="secteur__button">
                                        <button class="secteur__accordion"><img class="secteur__btn" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="button flèche vers le bas"></button>
                                </div>
                        </div>
                        <div class="secteur__panel">
                                <img class="secteur__img" src="<?= $image_ent?>" alt="<? echo $titre_ent?>">
                                <h6><?= $telephone_ent?></h6>
                                <h6><?= $email_ent?></h6>
                                <h6><?= $site_web_ent?></h6>
                        </div>
                </div>
                <? endwhile; endif;?>
        </div>
</section>
<? get_footer(); ?>