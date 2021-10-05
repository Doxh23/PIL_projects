<? get_header(); ?>


<div class="espace-titre"><h1>
    espace et outils <br>de production
</h1></div>
<div class="espace-mask-group"><img src="http://localhost/wordpress/wp-content/uploads/2021/09/Mask-Group-79@2x.jpg" alt=""></div>
<div class="espace-rubrique">
    <div class="espace-titre-auxiliaire">
<h2>Nos Espaces</h2>
<p>Des espaces polyvalents de 15 à 1000m²</p>
</div>
<div class="espace-reserver">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nam impedit sed accusamus modi ea.</p>
    <a class="img-espace-reserver" href="">reservez vos places  <img src="http://localhost/wordpress/wp-content/uploads/2021/09/add.svg" alt=""></a></div>


</div>


<div class="espace-production">
<div class="nos-productions">
    <div class="title-production">
<h2>Nos outils de production</h2>
</div>
<div class="text-production">

<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex quam voluptatibus possimus ducimus numquam aliquid temporibus rerum ab qui a.</p>
</div>
</div>
<div class="img-espace"><img src="http://localhost/wordpress/wp-content/uploads/2021/09/Image-63@2x.jpg" alt=""></div>


</div>
<div class="secteur-accordeons-espace">
    <div class="accordeons-espace">
<?php if (have_rows('repeater_accordion')): ?>
<?php while(have_rows('repeater_accordion')): the_row(); ?>
<div class="secteur-accordion">

<button class="accordions-button"> <div class="titre-accordions"><h3><?php the_sub_field('titre_accordions_espace')
;?></h3></div>
<div class="accordeons-plus">+</div>
</button>
<div class="content-accord">
<div class="text-accord">

<p><?php the_sub_field('texte_accordeons_espace')  ?></p>
</div>

<div class="liste-espace">
    
    <h3 class="petit-titre-accordeons"><?php    the_sub_field('petit_titre_accordeons_espace')?></h3>
    <?php if(have_rows('list_accordeons_espace')) : ?>
        <ul>
            <?php while(have_rows('list_accordeons_espace')):the_row() ?>
            <li> + <?php the_sub_field('el_list_accordeons') ?></li>
        
       <?php endwhile ?>
       </ul> <?php endif?>
</div>
</div>
</div>
    <?php endwhile;endif ?>
    </div>
    </div>
  








<? get_footer(); ?>