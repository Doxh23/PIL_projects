<? 
/*
* Template Name: Archives
*/
?>
<? get_header(); ?>
<section class="secteurs">
        <div class="gauche">
                <h1><? the_title();?></h1>

                <ul>   
                <?php              
                $get_parent_cats = array('parent' => '0' //get top level categories only 
                );          
                     
                $all_categories = get_categories( $get_parent_cats );
                //get parent categories

                foreach( $all_categories as $single_category ){                 
                        //for each category, get the ID  

                        $catID = $single_category -> cat_ID; 
                        
                        echo '<li><a href=" ' . get_category_link( $catID ) . ' ">' . $single_category -> name . '</a>'; 

                        //category name & link                     
                        $get_children_cats = array('child_of' => $catID 
                        //get children of this parent using the catID variable from earlier                 
                        );

                        $child_cats = get_categories( $get_children_cats );
                        //get children of parent category 

                        echo '<form class="form-check" action="" >';                     foreach( $child_cats as $child_cat ){                         
                                //for each child category, get the ID                        
                        $chil;
                        }
                }?>
        </div>
        <div class="droite">
        <? get_search_form(); ?>
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); 
                //var_dump($post);
                the_title();?>

                        <div class="secteur__entreprise">
                                <button class="secteur__accordion">
                                        <div class="secteur__titre">
                                                <h2><? the_field('nom__entreprise')?></h2>
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
                <? endwhile; endif;?>
        </div>
</section>
<? get_footer(); ?>