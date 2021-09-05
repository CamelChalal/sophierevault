<?php

/**
 * The template for displaying the header
 * @package Wordpress
 * @subpackage Sophie Revault
 * @since Sophie Revault 1.0
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery-ui.css">


    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick-theme.css">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body>

    <!-- Header Desktop-->

    <header class="header__desktop">
        <nav class="nav__desktop">
            <div class="container_nav">
                <div class="container_logo">
                    <a class="logo" href="<?php the_permalink(6) ?>">
                        <img class="logotype" src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" alt="">
                    </a>
                </div>

                <div class="container_links">
                    <ul class="menu_links">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'menu-header',
                        )); ?>
                        <li>
                            <button class="search_form" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <a><i class="fa fa-search"></i></a>
                            </button>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Saisissez votre recherche</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php the_permalink(get_page_by_path('recherche')); ?>" method="get" class="search">
                            <input class="input_search" type="text" aria-label="Search" name="termtosearch" id="search" value="<?php the_search_query(); ?>">
                            <button type="submit" class="bouton_recherche"><a class="btn_card_activite btn_modal">Rechercher

                                </a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </header>

    <!--HEADER MOBILE-->
    <header class="header__mobile">
        <nav class="nav__mobile">
            <div class="container_logo">
                <a class="logo" href="<?php the_permalink(6) ?>">
                    <img class="logotype" src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" alt="">
                </a>
            </div>
            <div id="open" class="container__open">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/burger.png" alt="">
            </div>
        </nav>
        <hr id="border">

        <div class="container__menu" id="menu">
            <div class="container__top">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/burger_close.png" id="close" class="close__menu" alt="">
            </div>
            <div class="menu__mobile">
                <ul class="menu_links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'menu-header',
                    )); ?>
                    <li>
                        <button class="search_form" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <a><i class="fa fa-search"></i></a>
                        </button>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Saisissez votre recherche</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php the_permalink(get_page_by_path('recherche')); ?>" method="get" class="search">
                            <input class="input_search" type="text" aria-label="Search" name="termtosearch" id="search" value="<?php the_search_query(); ?>">
                            <button type="submit" class="bouton_recherche"><a class="btn_card_activite btn_modal">Rechercher

                                </a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </header>