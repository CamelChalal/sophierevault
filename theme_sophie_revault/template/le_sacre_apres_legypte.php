<?php /* 

Template Name: Après l'Egypte (le sacré)

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


<!-- Intro bleu du nil-->

<div class="container_bckg">
    <div class="container">
        <div class="container_intro">
            <div class="texte_intro">
                <p><?php the_field('texte') ?></p>
            </div>
            <div class="img_intro">
                <img src="<?php the_field('image') ?>" alt="">
            </div>
        </div>
    </div>
</div>

<!--carousel mini Le nil -->
<div class="container">
    <div class="container_carousel">
        <div class="carousel_intro">
            <?php if (have_rows('slider_mini')) :
                $i = 0;
                while (have_rows('slider_mini')) : the_row(); ?>
                    <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>


<!-- Cards oeuvre -->

<div class="bckg_clr bckg_clr2">
    <h3><?php the_field('titre_oeuvre_le_sacre') ?></h3>
</div>

<div class="container">
    <div class="container_cardsNil">
        <?php if (have_rows('carte_oeuvre_le_sacre')) :
            $i = 0;
            while (have_rows('carte_oeuvre_le_sacre')) : the_row(); ?>

                <div class="card card_nil" style="width: 100%;">
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

<!-- Cards horizontal oeuvre  -->

<div class="container_all_section">
    <h5><?php the_field('titre_mosaique') ?></h5>
    <p><?php the_field('texte_mosaique') ?></p>

    <div class="container__allCard">

        <?php if (have_rows('mosaique_horizontal_le_sacre')) :
            $i = 0;
            while (have_rows('mosaique_horizontal_le_sacre')) : the_row(); ?>

                <div class="box_card col-md-12">

                    <div class="row g-0 cardS">
                        <div class="col-md-7 img__nil">
                            <img src="<?php the_sub_field('image') ?>" alt="...">
                        </div>
                        <div class="col-md-5 ">
                            <div class="card-body card_bodyNil2">
                                <h5 class="card-title"><?php the_sub_field('titre') ?></h5>
                                <p class="card-text"><?php the_sub_field('texte') ?></p>
                            </div>
                        </div>
                    </div>

                </div>

            <?php $i++;
            endwhile; ?>
        <?php endif; ?>

    </div>

</div>



<?php get_footer() ?>