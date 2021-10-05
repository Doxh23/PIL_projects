<?php get_header() ?>

<div class="pole-top-banner">
    <div class="texte-top-banner">
        <div class="titre-top-banner">
<h2>le grand cluster dedié aux industrieq créative</h2>
</div>
<div class="para-top-banner">
<p>

    installé  dans une ancienne fabrique  de tabac  totalement rénovée , le Pole est devenu  e plus grand  cluster d'entreprises wallon  dédié  a l'audiovisuel
</p>
</div>
</div>
<img src="http://localhost/wordpress/wp-content/uploads/2021/10/Mask-Group-98@2x.jpg" alt="">
</div>



<div>

<section id= "section-moving-text">
<p id="moving-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero porro doloribus amet blanditiis reiciendis nihil. ?></p>
</section>
<section>
<h3> Notre equipe</h3>
<div class="member-container">
<?php if (have_rows('grille_repeater_propos')): ?>
<?php while(have_rows('grille_repeater_propos')): the_row(); ?>
<div class="member">
    <img src="<?php echo get_sub_field('photo_propos')['sizes']['large'] ?>" alt="">
    <div class="donnee-member">
        <div class="name">
    <p><?php  the_sub_field('nom_propos')?></p>
    </div>
    <div class="role">
    <p>test2</p>
    <p>test3</p>
    </div>
    </div>
</div>
<?php endwhile;endif ?>
</div>
</section>
<div class="actu-button"></div>
<div class="carte-actu"></div>


</div>


<div>
    <h3></h3>
    <h2></h2>
</div>



<?php    get_footer() ?>