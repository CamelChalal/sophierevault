<?php

function montheme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

function montheme_register_assets()
{

    wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css");
    wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js", ["popper", "jquery"], false, true);
    wp_register_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", [], false, true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/d3669e4fd3.js" crossorigin="anonymous');
    wp_enqueue_script('jquery');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery',  get_template_directory_uri() . '/assets/js/jquery.readall.js', false);
    wp_enqueue_style('style',  get_template_directory_uri() . '/assets/css/style.css', false);
}

add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_register_assets');



function codex_custom_init()
{
    // OEUVRES Avant L'egypte
    $labels = array(
        'name' => "Oeuvre avant l'Egypte",
        'singular_name' => "Oeuvre avant l'Egypte",
        'add_new' => 'Ajouter une oeuvre',
        'add_new_item' => 'Ajouter une nouvelle oeuvre ',
        'edit_item' => 'Editer une oeuvre ',
        'new_item' => 'Nouvelle oeuvre',
        'all_items' => 'Toutes les oeuvres',
        'view_item' => 'Voir oeuvre',
        'search_items' => 'Chercher une oeuvre',
        'not_found' =>  'Aucune oeuvre trouvée',
        'not_found_in_trash' => 'Aucune oeuvre trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => "Oeuvre avant l'Egypte"
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => "oeuvre-avant-l'Egypte"),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-open-folder',
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    );
    register_post_type("oeuvre", $args);

    /////////////////////////////////////////////////////////////////////////

    // OEUVRES pendant L'egypte
    $labels = array(
        'name' => "Oeuvre pendant l'Egypte",
        'singular_name' => "Oeuvre pendant l'Egypte",
        'add_new' => 'Ajouter une oeuvre',
        'add_new_item' => 'Ajouter une nouvelle oeuvre ',
        'edit_item' => 'Editer une oeuvre ',
        'new_item' => 'Nouvelle oeuvre',
        'all_items' => 'Toutes les oeuvres',
        'view_item' => 'Voir oeuvre',
        'search_items' => 'Chercher une oeuvre',
        'not_found' =>  'Aucune oeuvre trouvée',
        'not_found_in_trash' => 'Aucune oeuvre trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => "Oeuvre pendant l'Egypte"
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => "oeuvre-pendant-l'Egypte"),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-open-folder',
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    );
    register_post_type("oeuvre2", $args);
}

add_action('init', 'codex_custom_init');

function create_taxonomies()
{
    $labels_type = array(
        'name'              => _x('Type oeuvre', 'taxonomy general name'),
        'singular_name'     => _x('Type oeuvre', 'taxonomy singular name'),
        'search_items'      => __('Search Type oeuvre'),
        'all_items'         => __('All Type oeuvres'),
        'parent_item'       => __('Parent Type oeuvre'),
        'parent_item_colon' => __('Parent Type oeuvre:'),
        'edit_item'         => __('Edit Type oeuvre'),
        'update_item'       => __('Update Type oeuvre'),
        'add_new_item'      => __('Add New Type oeuvre'),
        'new_item_name'     => __('New Type oeuvre Name'),
        'menu_name'         => __('Type'),
    );

    $args_type = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels_type,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'type-oeuvre'),
    );

    register_taxonomy('oeuvres_categories', array("oeuvre"), $args_type);

    ///////////////////////////////////////////////////////////////////////////////////////////////

    $labels_type = array(
        'name'              => _x('Type oeuvre le sacré', 'taxonomy general name'),
        'singular_name'     => _x('Type oeuvre le sacré', 'taxonomy singular name'),
        'search_items'      => __('Search Type oeuvre'),
        'all_items'         => __('All Type oeuvres'),
        'parent_item'       => __('Parent Type oeuvre'),
        'parent_item_colon' => __('Parent Type oeuvre:'),
        'edit_item'         => __('Edit Type oeuvre'),
        'update_item'       => __('Update Type oeuvre'),
        'add_new_item'      => __('Add New Type oeuvre'),
        'new_item_name'     => __('New Type oeuvre Name'),
        'menu_name'         => __('Type'),
    );

    $args_type = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels_type,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'type-oeuvre-sacré'),
    );

    register_taxonomy('oeuvres_sacre_categories', array("oeuvre2"), $args_type);
}

add_action('init', 'create_taxonomies', 0);


// ajouter option page //
if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}


//ajouter une nouvelle zone de menu à mon thème
// s'il y a plusieurs menus à rajouter, voici le code :
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu Header'),
            'footer-menu' => __('Menu Footer'),
        )
    );
}
add_action('init', 'register_my_menus');

function new_excerpt_length($length)
{

    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');
