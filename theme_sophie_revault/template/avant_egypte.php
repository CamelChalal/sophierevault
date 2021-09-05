<?php /* 

Template Name: Avant l'egypte

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
    <img src="<?php the_field('image_banniere') ?>" alt="">
    <div class="titre_banniere">
        <h1><?php the_field('titre') ?></h1>
    </div>
</div>

<!-- Intro Paul Klee -->

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

<!--carousel 1 Paul Klee -->
<div class="container">
    <div class="container_carousel">
        <div class="carousel_intro">
            <?php if (have_rows('carousel_miniature')) :
                $i = 0;
                while (have_rows('carousel_miniature')) : the_row(); ?>
                    <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<!-- Presentation 1 -->

<div class="container_bckg">
    <div class="container_pres">
        <div class="container_top">
            <div class="container__img">
                <img src="<?php the_field('image_du_haut') ?>" alt="">
            </div>
            <div class="container_txt">
                <h3><?php the_field('titre_du_haut') ?></h3>
                <p><?php the_field('texte_du_haut') ?></p>
            </div>
        </div>
        <div class="container_bottom">
            <div class="container__img">
                <img src="<?php the_field('image_du_bas') ?>" alt="">
            </div>
            <div class="container_txt">
                <h3><?php the_field('titre_du_bas') ?></h3>
                <p><?php the_field('texte_du_bas') ?></p>
            </div>

        </div>


    </div>
</div>

<!-- Partie filtre -->

<div class="container">
    <div class="container_all_filtre">
        <h3>Lorem <span>Ipsum</span></h3>
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
                'post_type' => 'oeuvre',
                'posts_per_page' => '1',
                'terms' => 'type-1'
            )); ?>

        <?php else : ?>

            <?php $post_filtres = new WP_Query(array(
                'post_type' => 'oeuvre',
                'tax_query' =>  array(
                    array(
                        'taxonomy' => 'oeuvres_categories',
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

                <div class="card cards_oeuvre container_all_grid">

                    <!-- <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="..."> -->



                    <div class="container__grid">
                        <div class="one"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid1.png" alt=""></div>
                        <div class="two"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid2.png" alt=""></div>
                        <div class="three"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid3.png" alt=""></div>
                        <div class="four"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid4.png" alt=""></div>
                        <div class="five"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid5.png" alt=""></div>
                        <div class="six"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid6.png" alt=""></div>
                        <div class="seven"><img src="<?php bloginfo('template_directory') ?>/assets/images/grid7.png" alt=""></div>
                    </div>
                    <div class="description_oeuvre_bckg"></div>
                    <div class="description_oeuvre">
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

        <?php wp_reset_postdata() ?>
    </div>

</div>

<!-- Carousel 2 Paul Klee-->
<div class="container_bckg">
    <div class="container_pres2">
        <div class="container_texte2">
            <h3><?php the_field('titre_carousel_oeuvre') ?></h3>
            <p><?php the_field('texte_carousel_oeuvre') ?></p>
        </div>
        <div class="container_carousel2">
            <div class="carousel_oeuvre">

                <?php if (have_rows('image_du_carousel')) :
                    $i = 0;
                    while (have_rows('image_du_carousel')) : the_row(); ?>
                        <div><img src="<?php the_sub_field('image') ?>" alt=""></div>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


<?php get_footer() ?>