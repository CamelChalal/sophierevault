<?php

/**
 * The template for displaying the header
 * @package Wordpress
 * @subpackage Sophie Revault
 * @since Sophie Revault 1.0
 */
?>
<footer>
    <div class="container__footer">
        <div class="logo__footer">
            <a class="logo" href="#">
                <img class="logotype" src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="container_column">
            <div class="column1_footer">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'menu-footer',
                )); ?>
            </div>
            <div class="column2_footer">
                <ul>
                    <li><a href="<?php the_permalink(40) ?>">Actualités</a></li>
                    <li><a href="<?php the_permalink(42) ?>">Contact</a></li>
                </ul>
            </div>
            <div class="column3_footer">
                <div class="find_me">
                    <p>Retrouvez moi</p>
                </div>
                <div class="social_media">
                    <ul>
                        <li><a href="<?php the_field('facebook', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory') ?>/assets/images/fb.png" alt=""></a></li>
                        <li><a href="<?php the_field('twitter', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory') ?>/assets/images/twitter.png" alt=""></a></li>
                        <li><a href="<?php the_field('linkedin', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory') ?>/assets/images/linkedin.png" alt=""></a></li>
                    </ul>

                </div>
            </div>

            <div class="bas_footer">
                <ul>
                    <li><a href="<?php the_permalink(501) ?>">Mentions Légales</a></li>
                </ul>
            </div>

        </div>


</footer>






<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/index_js.js"></script>





<?php wp_footer(); ?>


</body>

</html>