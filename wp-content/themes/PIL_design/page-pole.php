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
<section class="notre-equipe">
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
<section class="section-actu">
<div class="actu-pole">
<div class="actu-button">
    <div class="actualité-actu">
    <h3>Actualité</h3>
    <a class="img-espace-reserver" href="">suivez-nous <i class="fab fa-facebook-f"></i></a>

    </div>
    <div class="arrow-actu">
    <i class="fas fa-arrow-right"></i>
    <i class="fas fa-arrow-left"></i>
    </div>
</div>
<div class="comment-pole">
<div class="carte-actu">
    <div class="content-carte-actu">
    <div class="date-carte-actu"> 
        <p>14 juillet 2021
        </p>
        <img src="http://localhost/wordpress/wp-content/uploads/2021/09/cat-digital.svg" alt="">
    </div>
    <div class="comment-carte-actu">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique blanditiis deleniti saepe sequi error voluptatem.</p>

    </div>
    </div>
</div>
<div class="carte-actu">
    <div class="content-carte-actu">
    <div class="date-carte-actu"> 
        <p>14 juillet 2021
        </p>
        <img src="http://localhost/wordpress/wp-content/uploads/2021/09/cat-digital.svg" alt="">
    </div>
    <div class="comment-carte-actu">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique blanditiis deleniti saepe sequi error voluptatem.</p>

    </div>
    </div>
</div>
<div class="carte-actu">
    <div class="content-carte-actu">
    <div class="date-carte-actu"> 
        <p>14 juillet 2021
        </p>
        <img src="http://localhost/wordpress/wp-content/uploads/2021/09/cat-digital.svg" alt="">
    </div>
    <div class="comment-carte-actu">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique blanditiis deleniti saepe sequi error voluptatem.</p>

    </div>
    </div>
</div>
<div class="carte-actu">
    <div class="content-carte-actu">
    <div class="date-carte-actu"> 
        <p>14 juillet 2021
        </p>
        <img src="http://localhost/wordpress/wp-content/uploads/2021/09/cat-digital.svg" alt="">
    </div>
    <div class="comment-carte-actu">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique blanditiis deleniti saepe sequi error voluptatem.</p>

    </div>
    </div>
</div>








</div>

</div>
</section>


</div>
<div class="pole-vide">

</div>

<div class="spintch-pole">
        <div class="contenue-spintch">
        <h4><?php   the_field('petit_titre_cta','options')  ?></h4>
        <h2><?php   the_field('grand_titre_cta','options')?></h2>
        </div>
    </div>



<?php    get_footer() ?>