<? get_header(); ?>

<section class="espace">
    <div class="espace-titre">
        <h1>
            <?php the_field('text_banner_espace') ?>
        </h1>
    </div>
    <div class="espace-mask-group"><img src="<?php echo get_field('image_espace')['sizes']['large'] ?>" alt=""></div>
    <div class="espace-rubrique">
        <div class="espace-titre-auxiliaire">
            <h2><?php the_field('left_title_espace') ?></h2>
            <p> <?php the_field('left_text_espace')   ?></p>
        </div>
        <div class="espace-reserver">
            <p><?php the_field('texte_wysiwyg') ?></p>
            <a class="img-pole-reserver" href="">reservez vos places <img src="http://localhost/wordpress/wp-content/uploads/2021/09/add.svg" alt=""></a>
        </div>


    </div>


    <div class="espace-production">
        <div class="nos-productions">
            <div class="title-production">
                <h2>Nos outils de production</h2>
            </div>
            <div class="text-production">

                <p><?php the_field('introduction_production') ?></p>
            </div>
        </div>
        <div class="img-espace"><img src="<?php echo get_field('image_productions')['sizes']['large']   ?>" alt=""></div>



    </div>
    <div class="secteur-accordeons-espace">
        <div class="accordeons-espace">
            <?php if (have_rows('repeater_accordion')) : ?>
                <?php while (have_rows('repeater_accordion')) : the_row(); ?>
                    <div class="secteur-accordion">

                        <button class="accordions-button">
                            <div class="titre-accordions">
                                <h3><?php the_sub_field('titre_accordions_espace'); ?></h3>
                            </div>
                            <div class="accordeons-plus">+</div>
                        </button>
                        <div class="content-accord">
                            <div class="text-accord">

                                <p><?php the_sub_field('texte_accordeons_espace')  ?></p>
                            </div>

                            <div class="liste-espace">

                                <h3 class="petit-titre-accordeons"><?php the_sub_field('petit_titre_accordeons_espace') ?></h3>
                                <?php if (have_rows('list_accordeons_espace')) : ?>
                                    <ul>
                                        <?php while (have_rows('list_accordeons_espace')) : the_row() ?>
                                            <li><span class="yellow">+ </span> <?php the_sub_field('el_list_accordeons') ?></li>

                                        <?php endwhile ?>
                                    </ul> <?php endif ?>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif ?>
        </div>
    </div>

    <div class="spintch">
        <div class="contenue-spintch">
            <h4><?php the_field('petit_titre_cta', 'options')  ?></h4>
            <h2><?php the_field('grand_titre_cta', 'options') ?></h2>
        </div>
    </div>



</section>




<? get_footer(); ?>