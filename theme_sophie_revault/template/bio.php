<?php /* 

Template Name: Biographie

*/

?>
<?php get_header() ?>

<!-- Banniere -->
<div class="container_banniere">
    <img src="<?php the_field('image_banniere') ?>" alt="">
    <div class="titre_banniere">
        <h1><?php the_field('titre') ?></h1>
    </div>
</div>

<!-- Contenu Page -->
<div class="container">
    <div class="container_contenu">
        <div class="container_photo">
            <img src="<?php the_field('image_biographie') ?>" alt="">
        </div>

        <div class="cadre_vert">
            <p><?php the_field('texte_encadre') ?></p>
        </div>
        <div class="container_all_text">
            <div class="contain_texte1">
                <p><?php the_field('texte_gauche') ?></p><br>
            </div>
            <div class="contain_texte2">

                <p><?php the_field('texte_droite') ?></p>
            </div>

            <div class="btn_voir_plus">
                <a href="<?php the_field('bouton_cv') ?>" role="button" target="blank">Voir son cv</a>
            </div>

        </div>
    </div>
</div>







<?php get_footer() ?>