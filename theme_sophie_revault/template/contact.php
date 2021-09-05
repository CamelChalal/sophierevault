<?php /* 

Template Name: contact

*/
?>

<?php get_header() ?>

<div class="container">
    <div class="container_contact">
        <h1><?php the_field('titre'); ?></h1>
        <div class="container_coordonnee">
            <div class="coordonnee">
                <div>
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/tel.png" alt="">
                </div>
                <div>
                    <p><?php the_field('e-mail', 'option'); ?></p>
                    <p><?php the_field('telephone', 'option'); ?></p>
                </div>

            </div>
            <span id="span"></span>
            <div class="info_desktop">
                <p> <span>Artiste </span> : Sophie Revault</p>
                <p> <span>Collaborateur</span> : <?php the_field('nom_du_collaborateur'); ?> / <?php the_field('email', 'option'); ?></p>
                <p> <span>Assistant</span> : <?php the_field('nom_de_lassistant'); ?></p>
            </div>
        </div>

        <div class="map_form">



            <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2909.305619270112!2d3.0051801154825153!3d43.18209777914024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b1ac6533adc49b%3A0x3f436a5149b73257!2s6%20Boulevard%20Gambetta%2C%2011100%20Narbonne!5e0!3m2!1sfr!2sfr!4v1623749860155!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="info_mobile">
                <p> <span>Artiste </span> : Sophie Revault</p>
                <p> <span>Collaborateur</span> : <?php the_field('nom_du_collaborateur'); ?> / <br> <?php the_field('email', 'option'); ?></p>
                <p> <span>Assistant</span> : <?php the_field('nom_de_lassistant'); ?></p>
            </div>


            <div class="container_form">

                <?php echo do_shortcode('[ninja_form id=2]'); ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>