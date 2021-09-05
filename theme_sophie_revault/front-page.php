<?php get_header() ?>


<!-- Partie Carousel -->

<div class="container">
    <div class="container__carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators btn_carousel">
                <?php if (have_rows('images_carousel')) :
                    $i = 0;
                    while (have_rows('images_carousel')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="carousel-inner">
                <?php if (have_rows('images_carousel')) :
                    $i = 0;
                    while (have_rows('images_carousel')) : the_row(); ?>
                        <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                            <img src="<?php the_sub_field('image'); ?>" class="d-block w-100" alt="oeuvre sophie revault">
                        </div>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="titre_home_page">
                <p><?php the_field('profession'); ?></p>
                <h1><?php the_field('nom'); ?></h1>
            </div>
            <button class="carousel-control-prev btn_prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon arrow_left" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn_next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon arrow_right" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- Partie L'artiste -->

<div class="container">
    <div class="container_artiste">
        <div class="right_side">
            <h3 class="titre_mobile titre_generique"> <?php the_field('titre'); ?></h3>
            <div class="portrait_sr">
                <img src="<?php the_field('photo'); ?>" alt="">
            </div>
            <div class="icon_sr">
                <img src="<?php the_field('image_peintre'); ?>" alt="">
            </div>
        </div>
        <div class="left_side">
            <h3 class="titre_desktop titre_generique"><?php the_field('titre'); ?></h3>

            <p><?php the_field('texte'); ?></p>

            <div class="btn_voir_plus">
                <a href="<?php the_permalink(8) ?>" role="button">Voir plus</a>
            </div>
        </div>
    </div>
</div>

<!-- Partie cards egypte -->

<div class="bckg_clr"></div>
<div class="container2">
    <div class="container_cards">
        <?php if (have_rows('carte_egypte')) :
            $i = 0;
            while (have_rows('carte_egypte')) : the_row(); ?>
                <div class="card card_home_page" style="width: 18rem;">
                    <div class="card-body card_contain">
                        <div class="container_icon">
                            <img src="<?php the_sub_field('icone') ?>" alt="">
                        </div>
                        <h5 class="card-title"><?php the_sub_field('titre') ?></h5>
                        <p><?php the_sub_field('date') ?></p>
                        <a href="<?php the_sub_field('lien_page') ?>" class="card-link"><img src="<?php the_sub_field('fleche_de_couleur') ?>" alt=""></a>
                    </div>
                </div>
            <?php $i++;
            endwhile; ?>
        <?php endif; ?>

    </div>
</div>

<!-- Partie Aujourd'hui -->
<div class="container">
    <div class="container_aujourdhui">
        <div class="right_side">
            <h3 class="titre_generique titre_mobile"><?php the_field('titre2') ?></h3>
            <div class="img_aujourdhui">
                <img src="<?php the_field('oeuvre') ?>" alt="">
            </div>
        </div>
        <div class="left_side bloc_text">
            <h3 class="titre_desktop titre_generique"><?php the_field('titre2') ?></h3>

            <p><?php the_field('texte2') ?></p>

            <div class="btn_voir_plus">
                <a href="<?php the_permalink(38) ?>" role="button">Voir plus</a>
            </div>

        </div>
    </div>
</div>

<!-- Partie Actualités -->
<div class="container">
    <div class="container_actu">
        <div class="container_titre">
            <h3 class="titre_generique titre_mobile2"><?php the_field('titre_actualites') ?></h3>
        </div>
        <div class="carousel_actu">
            <?php $actu = new WP_Query(array('post_type' => 'POST', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '5')); ?>
            <?php $i = 1;
            while ($actu->have_posts()) : $actu->the_post(); ?>
                <div class="card text-white" style="border: none;">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img" alt="..."></a>
                    <div class="card-img-overlay legend_card_principal">
                        <p class="card-text"><?php echo the_excerpt() ?></p>
                        <p class="card-text"><?php echo get_the_date() ?></p>
                    </div>
                </div>

            <?php $i++;
            endwhile; ?>

        </div>
    </div>
</div>

<div class="container">
    <div class="container_actu_desktop">
        <div class="container_titre">
            <h4 class="titre_desktop titre_generique ">Actualités</h4>
        </div>
        <div class="container_card_actu">

            <div class="actu_miniature">

                <?php $actu = new WP_Query(array('post_type' => 'POST', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '5')); ?>
                <?php $i = 1;
                while ($actu->have_posts()) : $actu->the_post(); ?>

                    <div class="card text-white card_mini card0<?php echo $i ?>">
                        <a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img" alt="..."></a>
                        <div class="card-img-overlay legend_card_principal">
                            <p class="card-text"><?php echo the_excerpt() ?></p>
                            <p class="card-text"><?php echo get_the_date() ?></p>
                        </div>
                    </div>

                <?php $i++;
                endwhile; ?>


            </div>
        </div>

    </div>

</div>
</div>

<?php get_footer() ?>