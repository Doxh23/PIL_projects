<? get_header(); ?>
<div class="sectionOne">
    <h1 class="punch-line"><?php the_field('punch_line_home'); ?></h1>

    <div class="image-fleche">

        <img class="fleche-bas" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="fleche-bas">

        <!-- <div id="box" onmousemove="videoHover(event)"> -->

        <!-- </div> -->

        <img class="bureaux-PI" id="box" onmousemove="videoHover(event)" src="<?php $image = get_field('image_home');
                                                                                echo $image['sizes']['large'];  ?>">
        <div id="tooltip">Voir <br> la vidéo</div>

    </div>

</div>
<section class="introduction-section">

    <div class="listes-container">
        <h2 class="introduction"><?php the_field('introduction_Home'); ?></h2>
        <div class="liste-1-container">

            <?php

            if (have_rows('liste_1_home')) : ?>
                <h2 class="titre"><?php the_field('titre_1'); ?></h2>

                <ul class="liste_1_home">
                    <?php while (have_rows('liste_1_home')) : the_row();
                    ?>
                        <li class="li-1"><?php the_sub_field('list_1_el_1');
                                            ?></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="liste-2-container">

            <?php
            if (have_rows('liste_2')) : ?>
                <h2 class="titre"><?php the_field('titre_2'); ?></h2>

                <ul class="liste_2">
                    <?php while (have_rows('liste_2')) : the_row();
                    ?>
                        <li class="li-2"><?php the_sub_field('list_2_el_1');
                                            ?></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id= "section-moving-text">
<p id="moving-text"><?php the_field('grand_texte'); ?></p>
</section>


<section class="formation">
<div class="image-formation">
<img class="imgForma" src="<?php $image2 = get_field('image_formation');
 echo $image2['sizes']['large'];  ?>">
 </div>
 <div class="texte-formation">
<p class="titre_formation"><?php the_field('titre_formation'); ?></p>
<p class="introduction_formation"><?php the_field('introduction_formation'); ?></p>
<p class="textes_formation"><?php the_field('texte_formation'); ?></p>
<li class="listeforma"><?php the_field('listeforma'); ?></li>


<?php
if (have_rows('liste_formation')) : ?>

    <ul class="liste_formation">
        <?php while (have_rows('liste_formation')) : the_row();
        ?>
            <li class="lifo"><?php the_sub_field('listeforma');?></li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>
<button class="btn-aca"><a class="a-aca"href="#">Voir le site ACA <span class="yellow">+</span></a></button>

 </div>
</section>




<? get_footer(); ?>