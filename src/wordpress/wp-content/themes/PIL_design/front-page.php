<? get_header(); ?>
<div class="sectionOne">
    <h1 class="punch-line"><?php the_field('punch_line_home'); ?></h1>

    <div class="image-fleche">

        <img class="fleche-bas" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="fleche-bas">
        <a href="<?php $image = get_field('image_home');
                    var_dump($image['sizes']); ?>"></a>
    </div>

    <?php the_field('introduction') ?>
</div>
<? get_footer(); ?>