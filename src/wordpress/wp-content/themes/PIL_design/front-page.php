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
<section id="section-moving-text">
    <p id="moving-text"><?php the_field('grand_texte'); ?></p>
</section>
<section class="projet_digital">
    <p>Vous avez un projet audiovisuel ou digital ?</p>
    <p>Une entreprise du Pôle peut vous aider !</p>
    <div class="cards">

    </div>
    <div class="cards">
        

    </div>
    <div class="cards">

    </div>
    <div class="cards">

    </div>
    <div class="cards">

    </div>
    <div class="last-card">

    </div>

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
                    <li class="lifo"><?php the_sub_field('listeforma'); ?></li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <button class="btn-aca"><a class="a-aca" href="#">Voir le site ACA <span class="yellow">+</span></a></button>

    </div>
</section>
<section class="liste-entreprises">
    <div class="entreprises">
        <p class="titre-entreprises">Les entreprises</p>

        <?php
        // the query
        $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish')); ?>

        <?php if ($wpb_all_query->have_posts()) : ?>

            <ul class="ul-entreprises">

                <!-- the loop -->
                <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                    <li class="li-entreprises"><a class="a-entreprises" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <!-- end of the loop -->

            </ul>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</section>

<div class="cookie-popup active">
    <div class="cookie-popup_container">
        <div class="cookie-popup_container_text">
            Pour améliorer votre expérience sur ce site web, nous utilisons des cookies. En savoir plus </div>
        <button class="cookie-popup_container_btn accept-cookies"> Accepter </button>
        <button class="cookie-popup_container_btn check-options"> Refuser </button>
    </div>
</div>

<div class="cookie-configurador">
    <div class="cookie-configurador_container">
        <div class="ccc ccc_maintitle">
            Cookies nas plataformas digitais da "empresa" e seus links acessórios.
        </div>
        <div class="ccc ccc_text">
            Cookies nas plataformas digitais da "empresa".
            Decida, já, se pretende prosseguir de imediato para os conteúdos "empresa", aceitando os cookies utilizados nas nossas plataformas digitais. Clique no botão seguinte "ACEITAR AS COOKIES".
        </div>
        <button class="cookie-popup_container_btn ccc ccc_btn accept-cookies"> Aceitar as Cookies </button>
        <div class="ccc ccc_text">
            Ou, em alternativa, se pretender dedicar mais tempo a esta operação, escolha as suas preferências! Tem todo o tempo do mundo.
        </div>
        <div class="ccc ccc_line"></div>
        <div class="ccc ccc_title">Funcionalidades Básicas</div>
        <div class="ccc ccc_option">
            <div class="ccc ccc_option_input">
                <input type="checkbox" id="consent_1" name="consent_1" value="1" disabled="disabled" checked="checked">
                Cookies Básicos e Imprescindíveis
            </div>
            <div class="ccc ccc_option_text">
                São imprescindíveis para navegar nas plataformas digitais RTP e para garantir que usufrui de uma oferta de serviço público de excelência. Servem para medição de audiências e de nível de serviço e possibilitam, a divulgação de publicidade sem personalização.
            </div>
        </div>

        <div class="ccc ccc_option">
            <div class="ccc ccc_option_input">
                <input type="checkbox" id="consent_2" name="consent_2" value="0">
                Cookies de Consumo
            </div>
            <div class="ccc ccc_option_text">
                Permitem personalizar as ofertas comerciais que lhe são apresentadas, direcionando-as para os seus interesses. Podem ser cookies próprios ou de terceiros. Alertamos que, mesmo não aceitando estes cookies, irá receber ofertas comerciais, mas sem corresponderem às suas preferências.
            </div>
        </div>

        <div class="ccc ccc_option">
            <div class="ccc ccc_option_input">
                <input type="checkbox" id="consent_3" name="consent_3" value="0">
                Cookies de Performance
            </div>
            <div class="ccc ccc_option_text">
                Permitem personalizar as ofertas comerciais que lhe são apresentadas, direcionando-as para os seus interesses. Podem ser cookies próprios ou de terceiros. Alertamos que, mesmo não aceitando estes cookies, irá receber ofertas comerciais, mas sem corresponderem às suas preferências.
            </div>
        </div>

        <div class="ccc ccc_option">
            <div class="ccc ccc_option_input">
                <input type="checkbox" id="consent_4" name="consent_4" value="0">
                Cookies Sociais
            </div>
            <div class="ccc ccc_option_text">
                Permitem personalizar as ofertas comerciais que lhe são apresentadas, direcionando-as para os seus interesses. Podem ser cookies próprios ou de terceiros. Alertamos que, mesmo não aceitando estes cookies, irá receber ofertas comerciais, mas sem corresponderem às suas preferências.
            </div>
        </div>

        <div class="ccc ccc_newfuncs">
            Faça as suas escolhas dos vários tipos de cookies e clique em
            <button class="ccc ccc_minimalbtn">SUBMETER PREFERÊNCIAS</button>.
        </div>

        <button class="ccc ccc_btn-back gobacknow">Voltar</button>

        <div class="ccc ccc_line"></div>

        <div class="ccc ccc_policies">
            <a href="#0" class="ccc_policy">Polica de Privacidade</a>
            <div class="ccc_breaker"></div>
            <a href="#0" class="ccc_policy">Politica de Cookies</a>
        </div>

    </div>
</div>
<? get_footer(); ?>