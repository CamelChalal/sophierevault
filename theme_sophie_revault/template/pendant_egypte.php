<?php /* 

Template Name: Pendant l'egypte

*/

?>
<?php get_header() ?>

<?php
if (isset($_GET['cat-articles'])) {
    $cat_filtre = $_GET['cat-articles'];
}
?>


<!-- Banniere -->
<div class="container_banniere">
    <img src="<?php the_field('banniere_mobile') ?>" alt="" class="banniere_mobile">
    <img src="<?php the_field('banniere_desktop') ?>" alt="" class="banniere_desktop">
    <div class="titre_banniere">
        <h1><?php the_field('titre') ?></h1>
    </div>
</div>


<!-- Intro après egypte-->

<div class="container_bckg">
    <div class="container">
        <div class="container_intro">
            <div class="texte_intro">
                <p><?php the_field('texte_introduction') ?></p>
            </div>
            <div class="img_intro">
                <img src="<?php the_field('image_introduction') ?>" alt="">
            </div>
        </div>
    </div>
</div>

<!--carousel mini Le sacré -->
<div class="container">
    <div class="container_carousel">
        <div class="carousel_intro">
            <?php if (have_rows('slider')) :
                $i = 0;
                while (have_rows('slider')) : the_row(); ?>
                    <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>


<!--carousel oeuvre Le sacré -->

<div class="container">
    <div class="container_carousel_oeuvre">
        <div class="carouselOeuvreSacre">
            <?php if (have_rows('les_oeuvres')) :
                $i = 0;
                while (have_rows('les_oeuvres')) : the_row(); ?>
                    <div>
                        <div class="card contain_sacre" style="width: 100%; border:none;">
                            <img src="<?php the_sub_field('image') ?>" class=" card-img-top" alt="...">
                            <div class="container_card">
                                <div class="oeuvre_annee">
                                    <div class="annee">
                                        <p><?php the_sub_field('annee') ?></p>
                                    </div>
                                    <div class="numero">
                                        <p><?php the_sub_field('numero_de_loeuvre') ?></p>
                                    </div>
                                </div>
                                <div class="descriptionOeuvre">
                                    <h5><?php the_sub_field('titre') ?></h5>
                                    <p class="card-text">
                                        <?php the_sub_field('texte') ?></p>
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


<!-- Partie filtre -->

<div class="container">
    <div class="container_all_filtre">
        <h3>Lorem <span>Ipsum</span> </h3>
        <div class="filtre">
            <p>

                <button class="btn btn__filtre" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <div>Filtres </div>
                    <div class="img_btn"><img src="<?php bloginfo('template_directory') ?>/assets/images/right_arrow.png" alt=""></div>
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body filtre_oeuvre">

                    <form method="get" action="#current_filtres">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'oeuvres_sacre_categories',
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'hide_empty' => 1,
                        ));


                        foreach ($categories as $category) : ?>
                            <input name="cat-articles" type="submit" value="<?php echo $category->name; ?>">
                        <?php endforeach; ?>

                    </form>
                </div>
            </div>
            </p>
        </div>
        <div class="filtre_desktop">
            <ul>
                <li>
                    <div>
                        <div class="filtre_oeuvre filtre_oeuvre_desktop">

                            <form method="get" action="#current_filtres">
                                <?php
                                $categories = get_terms(array(
                                    'taxonomy' => 'oeuvres_categories',
                                    'orderby' => 'name',
                                    'order'   => 'ASC',
                                    'hide_empty' => 1,
                                ));


                                foreach ($categories as $category) : ?>
                                    <input name="cat-articles" type="submit" value="<?php echo $category->name; ?>">
                                <?php endforeach; ?>

                            </form>
                        </div>
                    </div>

                </li>

            </ul>
        </div>
    </div>
    <div>

        <?php if (!isset($_GET['cat-articles']) || $_GET['cat-articles'] === '') : ?>
            <?php $post_filtres = new WP_Query(array(
                'post_type' => "oeuvre2",
                'posts_per_page' => '1',
                'terms' => 'type-1'
            )); ?>

        <?php else : ?>

            <?php $post_filtres = new WP_Query(array(
                'post_type' => "oeuvre2",
                'tax_query' =>  array(
                    array(
                        'taxonomy' => 'oeuvres_sacre_categories',
                        'field' => 'name',
                        'terms' => $cat_filtre,

                    )
                ),
                'posts_per_page' => '-1'
            )); ?>
        <?php endif; ?>




        <?php if ($post_filtres->have_posts()) : ?>
            <?php $j = 1; ?>



            <?php while ($post_filtres->have_posts()) : $post_filtres->the_post(); ?>

                <div class="card cards_oeuvre container_all_gridSacre">

                    <!-- <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="..."> -->



                    <div class="container__gridSacre">
                        <div class="uno"><img src="<?php bloginfo('template_directory') ?>/assets/images/oeuvresacre2.png" alt=""></div>
                        <div class="dos"><img src="<?php bloginfo('template_directory') ?>/assets/images/oeuvresacre3.png" alt=""></div>
                        <div class="tres"><img src="<?php bloginfo('template_directory') ?>/assets/images/oeuvresacre4.png" alt=""></div>
                        <div class="quatro"><img src="<?php bloginfo('template_directory') ?>/assets/images/oeuvresacre1.png" alt=""></div>
                        <div class="cinco"><img src="<?php bloginfo('template_directory') ?>/assets/images/oeuvresacre6.png" alt=""></div>
                    </div>
                    <div class="description_oeuvre_bckgSacre"></div>
                    <div class="description_oeuvreSacre">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p><?php the_excerpt(); ?></p>
                    </div>





                </div>

                <?php $j++; ?>
            <?php endwhile; ?>

        <?php else : ?>
            <div class="filter_no_result">
                <p>Aucun articles ne correspond à votre recherche !</p>
            </div>
        <?php endif; ?>
    </div>

</div>

<?php get_footer() ?>