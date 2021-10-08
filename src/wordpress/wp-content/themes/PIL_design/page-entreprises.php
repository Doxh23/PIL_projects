<? 
/*
* Template Name: Archives
*/
?>

<? get_header(); ?>

<section class="secteurs">
        <div class="gauche">
                <h1><? the_title();?></h1>
                
                <ul class="cat">   
        <?php 
            $get_parent_cats = array(
                'parent' => '0' //get top level categories only
            ); 

            $all_categories = get_categories( $get_parent_cats );//get parent categories 

            foreach( $all_categories as $single_category ){
                //for each category, get the ID
                $catID = $single_category -> cat_ID;

                echo '<li class="cat__li"><img src="http://localhost/wordpress/wp-content/uploads/2021/09/add.svg" alt="cross image">' . $single_category -> name .'</li>'; //category name
                
                $get_children_cats = array(
                    'child_of' => $catID //get children of this parent using the catID variable from earlier
                );

                $child_cats = get_categories( $get_children_cats );//get children of parent category
                echo '<ul class="cat__children">';
                    foreach( $child_cats as $child_cat ){
                        //for each child category, get the ID
                        $childID = $child_cat -> cat_ID;

                        //for each child category, give us the name
                        echo '<li class="cat__child"><input class="child__input" type="checkbox">' . $child_cat->name . '</li>';
                    }
                echo '</ul>';
            } //end of categories logic ?>
    </ul>

        </div>

        <div class="droite">
                <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); ?>
                
                <?php if ( $wpb_all_query->have_posts() ) : ?>

                        <form role="search" method="post" id="searchform" class="searchform" action="http://localhost/wordpress/index.php/les-entreprises/?s=<? the_field('nom_entreprise');?>">
                                <label class="screen-reader-text" for="s">Search for:</label>
                                <input type="text" value="" name="s" id="s" placeholder="Chercher une entreprise"/>
                                <input type="submit" id="searchsubmit" value="Search"/>
                         </form> 

                        <!-- the loop -->
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                        <div class="secteur__entreprise">
                                <button class="secteur__accordion">
                                        <div class="secteur__titre">
                                                <h2><? the_field('nom_entreprise')?></h2>
                                                <?php foreach(get_field('taxonomie_entreprise') as $data){ ?>
                                                        <h6> <?php echo $data;?></h6>
                                                <? }?>
                                        </div>
                                        <img class="secteur__btn" src="http://localhost/wordpress/wp-content/uploads/2021/09/arrow-down.svg" alt="button flèche vers le bas">
                                </button>            
                                <div class="secteur__panel">
                                        <img class="secteur__img" src="<? the_field('image_entreprise')?>" alt="<? the_field('nom__entreprise')?>">
                                        <div class="secteur__info">
                                                <h6><? the_field('telephone_entreprise')?></h6>
                                                <h6><? the_field('email_entreprise')?></h6>
                                                <h6>
                                                        <a href="<? the_field('site_web_entreprise')?>">
                                                        <? the_field('site_web_entreprise')?>
                                                        </a>
                                                </h6>
                                                <p><? the_field('description_entreprise')?></p>
                                        </div>
                                </div>
                        </div>
                <?php endwhile; ?>
                <!-- end of the loop -->                
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>                        
        </div>
</section>

<? get_footer(); ?>