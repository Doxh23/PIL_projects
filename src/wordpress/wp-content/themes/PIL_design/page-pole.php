<?php get_header() ?>

<div class="pole-top-banner">
    <div class="texte-top-banner">
        <div class="titre-top-banner">
<h2><?php  the_field('titre_propos') ?></h2>
</div>
<div class="para-top-banner">
<p>
<?php  the_field('introduction_propos') ?>
</p>
</div>
</div>
<div class="embed-video-pole">
<?php  if(get_field('embed_video_propos')) {
the_field('embed_video_propos'); 
}
else{ ?>
<img src="<?php  echo get_field('img_embed_video_propos')['sizes']['large'];
?>" alt="">
<?php } ?>
</div>
</div>



<div>

<section id= "section-moving-text">
<p id="moving-text"> <?php the_field('grand_texte_propos')  ?></p>
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
    <p><?php  the_sub_field('role')  ?></p>
    <p><?php  the_sub_field('email_propos') ?></p>
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