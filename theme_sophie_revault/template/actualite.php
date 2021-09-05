<?php /* 

Template Name: Actualités

*/

?>
<?php get_header() ?>

<div class="container">
    <div class="container_all_actu">
        <h1><?php the_field('titre') ?></h1>
        <p><?php the_field('texte_introduction') ?></p>

        <div class="container_card_pageActu">

            <?php $actu = new WP_Query(array('post_type' => 'POST', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1')); ?>
            <?php $i = 1;
            while ($actu->have_posts()) : $actu->the_post(); ?>

                <div class="card card_actu" style="width: 18rem;">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="">
                    <div class="card-body cardBody_actu">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p><?php echo get_the_date(); ?></p><br>
                        <p class="card-text txt_card"><?php echo get_the_excerpt(); ?> </p><br>
                        <div class="card-footer footer_card"><a href="<?php the_permalink(); ?>" class="btn_actu">En savoir plus <img src="<?php bloginfo('template_directory') ?>/assets/images/vector.png" alt=""></a></div>

                    </div>
                </div>

            <?php $i++;
            endwhile; ?>

            <div id="loadMore" class="btn_show_more">
                <a role="button">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/arrow_down.png" alt="">
                </a>
            </div>

        </div>


    </div>

</div>



<?php get_footer() ?>