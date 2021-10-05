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
                $description_ent = get_sub_field('description_entreprise');
                ?>
                        <div class="secteur__entreprise">
                                <button class="secteur__accordion">
                                        <div class="secteur__titre">
                                                <h2><?= $titre_ent?></h2>
                                                <?php foreach(get_sub_field('taxonomie_entreprise') as $data){ ?>
                                                        <h6> <?php echo $data;?></h6>
                                                <? }?>
                                        </div>
                                        <img class="secteur__btn" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="button flèche vers le bas">
                                </button>            
                                <div class="secteur__panel">
                                        <img class="secteur__img" src="<?= $image_ent?>" alt="<? echo $titre_ent?>">
                                        <div class="secteur__info">
                                                <h6><?= $telephone_ent?></h6>
                                                <h6><?= $email_ent?></h6>
                                                <h6>
                                                        <a href="<?= $site_web_ent?>">
                                                        <?= $site_web_ent?>
                                                        </a>
                                                </h6>
                                                <p><?= $description_ent?></p>
                                        </div>
                                </div>
                        </div>
                <? endwhile; endif;?>
        </div>
</section>
<? get_footer(); ?>