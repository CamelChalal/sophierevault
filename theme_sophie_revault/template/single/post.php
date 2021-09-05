<?php get_header() ?>

<?php
$post = get_queried_object();
$postType = get_post_type_object(get_post_type($post));
?>

<div class="container">

    <section class="fil__ariane">
        <a href="<?php bloginfo('url'); ?>">Accueil</a>
        <span> > </span>
        <?php if ($post_type === 'articles') : ?>
            <a href="#">Actualités</a>
            <span> > </span>
        <?php endif; ?>
        <a href="<?php the_permalink(40) ?>"><?php echo esc_html($postType->labels->singular_name); ?></a>
        <span> > </span>
        <a href="#"> <?php the_title(); ?> </a>
    </section>





    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">

                <h1 class="title_actu"><?php the_title(); ?></h1>

                <div class="container_slider">
                    <div class="banner-slider">
                        <div class="slider slider-for">
                            <?php if (have_rows('carousel_posts')) :
                                $i = 1;
                                while (have_rows('carousel_posts')) : the_row(); ?>
                                    <div class="slider-banner-image">
                                        <img src="<?php the_sub_field('image'); ?>" alt="slider-img">

                                    </div>
                                <?php $i++;
                                endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="slider slider-nav">
                            <?php if (have_rows('carousel_posts')) :
                                $i = 1;
                                while (have_rows('carousel_posts')) : the_row(); ?>
                                    <div class="thumbImg">
                                        <img src="<?php the_sub_field('image'); ?>" alt="slider-img">

                                    </div>
                                <?php $i++;
                                endwhile; ?>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>
                <div class="post-content">
                    <div class="content-date"><?php echo get_the_date(); ?></div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>
<?php get_footer() ?>