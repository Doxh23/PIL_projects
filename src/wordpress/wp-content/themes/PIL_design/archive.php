/*
Template Name: Archives
*/



<? get_header(); ?>
<? the_title();?>
<?php $image = get_field('image_entreprise');
        echo($image);  ?>
<? get_footer(); ?>