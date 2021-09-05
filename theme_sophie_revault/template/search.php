<?php /* 

Template Name: recherche

*/
?>

<?php get_header() ?>

<?php $search = new WP_Query(array('s' => $_GET['termtosearch'], 'post_type' => array('POST', 'page', 'article', 'actualités', "oeuvre", "oeuvre2"), 'orderby' => 'date', 'posts_per_page' => '-1')); ?>
<?php $num = $search->post_count;  ?>
<main class="container" style="margin-top: 100px">
    <section>
        <div class="">
            <div class="">
                <div class="">
                    <h1><?php echo $num; ?> Résultats pour : <?php echo $_GET['termtosearch']; ?></h1>
                    <?php if (isset($_GET['termtosearch']) && $_GET['termtosearch'] != "") : ?>
                        <span></span> <br>
                    <?php else : ?>
                        <h1><?php the_title(); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- result search -->
    <section class="container recherche__section">
        <div class="recherche__divs">
            <?php if ($search->have_posts()) : ?>
                <?php $i = 0;
                while ($search->have_posts()) : $search->the_post(); ?>
                    <div class="card recherche1__div">
                        <div class="card-body card_resultat_recherche">
                            <a class="" href="<?php the_permalink(); ?>">
                                <p id="result__title">
                                    <?php the_title(); ?> <br><br> <?php the_excerpt(); ?>
                                </p>
                            </a>
                        </div>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php else : ?>
                <h2 class="text-center m-b-100">Aucun résultat trouvé pour : "<b><?php echo $_GET['termtosearch']; ?></b>"</h2>
            <?php endif; ?>
        </div>
    </section>
</main>


<?php get_footer() ?>