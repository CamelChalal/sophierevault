<?php /* 

Template Name: Aujourd'hui

*/

?>
<?php get_header() ?>

<!-- Banniere -->
<div class="container_banniere">
    <img src="<?php the_field('banniere_mobile') ?>" alt="" class="banniere_mobile">
    <img src="<?php the_field('banniere_desktop') ?>" alt="" class="banniere_desktop">
    <div class="titre_banniere">
        <h1><?php the_field('titre') ?></h1>
    </div>
</div>

<!-- Intro le pli-->

<div class="container_bckg">
    <div class="container">
        <div class="container_intro">
            <div class="texte_intro">
                <h3 class="titre_desktop titre_generique titre_pli"><?php the_field('titre_introduction') ?></h3>
                <p><?php the_field('texte_introduction') ?></p>
            </div>
            <div class="img_intro">
                <img src="<?php the_field('image_introduction') ?>" alt="">
            </div>
        </div>
    </div>
</div>


<!--carousel mini Le pli -->
<div class="container">
    <div class="container_carousel">
        <div class="carousel_intro">
            <?php if (have_rows('slider_aujourdhui')) :
                $i = 0;
                while (have_rows('slider_aujourdhui')) : the_row(); ?>
                    <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<!-- Presentation 1 -->
<h4 class="titre_page_pli"><?php the_field('titre_les_plis_n&b') ?></h4>
<div class="container_bckg">


    <div class="container_pres">


        <div class="container_top">
            <div class="container__img">
                <img src="<?php the_field('image_du_haut') ?>" alt="">
            </div>
            <div class="container_txt">
                <h3><?php the_field('titre_oeuvre_1') ?></h3>
                <p><?php the_field('description_oeuvre_1') ?></p>
            </div>
        </div>
        <div class="container_bottom">
            <div class="container__img">
                <img src="<?php the_field('image_du_bas') ?>" alt="">
            </div>
            <div class="container_txt">
                <h3><?php the_field('titre_oeuvre_2') ?></h3>
                <p><?php the_field('description_oeuvre_2') ?></p>
            </div>

        </div>


    </div>
</div>


<!--carousel pli velours -->

<div class="container">
    <div class="container_carousel_oeuvre">
        <h4 class="titre_page_pli"><?php the_field('titre_pli_velours') ?></h4>

        <div class="carouselOeuvreSacre carouselPli">
            <?php if (have_rows('carte_oeuvre_pli_velours')) :
                $i = 0;
                while (have_rows('carte_oeuvre_pli_velours')) : the_row(); ?>
                    <div>
                        <div class="card contain_sacre" style="width: 100%; border:none;">
                            <img src="<?php the_sub_field('image') ?>" class=" card-img-top" alt="">
                            <div class="container_card">
                                <div class="oeuvre_annee">
                                    <div class="annee">
                                        <p><?php the_sub_field('annee') ?></p>
                                    </div>
                                    <div class="numero">
                                        <p><?php the_sub_field('numero') ?></p>
                                    </div>
                                </div>
                                <div class="descriptionOeuvre">
                                    <h5> <?php the_sub_field('titre') ?></h5>
                                    <p class="card-text">
                                        <?php the_sub_field('description') ?></p>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php $i++;
                endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</div>

<!-- Carousel pli a 4 feuilles-->
<div class="container_bckg">
    <div class="container_pres2 container_pli4Feuilles">
        <div class="container_texte2">
            <h4 class="titre_page_pli"><?php the_field('titre_pli_4_feuilles') ?></h4>
            <p><?php the_field('texte_pli_4_feuilles') ?></p>
        </div>
        <div class="container_carousel2">
            <div class="carousel_oeuvre carousel_pli4_feuille">
                <?php if (have_rows('slider_pli_4_feuilles')) :
                    $i = 0;
                    while (have_rows('slider_pli_4_feuilles')) : the_row(); ?>
                        <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


<!-- Partie pli a bande -->
<div class="container">
    <div class="container_aujourdhui">
        <div class="right_side">
            <h4 class="titre_page_pli  titre_mobile"><?php the_field('titre_mobile_pli_a_bande') ?></h4>
            <div class="img_aujourdhui">
                <img src="<?php the_field('image_pli_a_bande') ?>" alt="">
            </div>
        </div>
        <div class="left_side bloc_text">
            <h4 class="titre_page_pli titre_page_pli2 titre_desktop"><?php the_field('titre_desktop_pli_a_bande') ?></h4>

            <p><?php the_field('description_pli_a_bande') ?></p>

        </div>
    </div>
</div>



<!-- Cards oeuvre -->

<div class="bckg_clr bckg_clr2 bckg_clr3">
    <h4 class="titre_page_pli"><?php the_field('titre_plis_a_serres') ?></h4>
</div>

<div class="container">
    <div class="container_cardsNil container_pli4_serre">
        <?php if (have_rows('carte_pli_a_serres')) :
            $i = 0;
            while (have_rows('carte_pli_a_serres')) : the_row(); ?>
                <div class="card card_nil card4serre" style="width: 100%;">
                    <img src="<?php the_sub_field('image') ?>" alt="...">
                    <div class="card-body card_nilBody">
                        <h5><?php the_sub_field('titre') ?></h5>
                        <p class="card-text">
                            <?php the_sub_field('texte') ?></p>
                    </div>
                </div>
            <?php $i++;
            endwhile; ?>
        <?php endif; ?>


    </div>
</div>

<?php get_footer() ?>