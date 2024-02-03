<?php

// enqueue styles
function enqueue_styles_scripts()
{
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('header_stylesheet', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('hero_stylesheet', get_template_directory_uri() . '/css/hero.css');
    wp_enqueue_style('works_stylesheet', get_template_directory_uri() . '/css/works.css');
    wp_enqueue_style('about_stylesheet', get_template_directory_uri() . '/css/about.css');
    wp_enqueue_script("works", get_theme_file_uri('/js/works.js'), null, "1.0", true);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_scripts');

// custom post types
function customPostTypes()
{
    // general info
    register_post_type('info', array(
        'supports' => array('title'),
        'public' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false,
            'delete_published_posts' => false,
        ),
        'map_meta_cap' => true,
        'labels' => array(
            'name' => 'CV',
            'edit_item' => 'Editar CV',
            'singular_name' => 'CV'
        ),
        'menu_icon' => 'dashicons-category'
    ));

    // social media
    register_post_type('social', array(
        'supports' => array('title'),
        'map_meta_cap' => true,
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => 'Redes Sociais',
            'add_new_item' => 'Adicionar Rede Social',
            'add_new' => 'Adicionar Rede Social',
            'edit_item' => 'Editar Rede Social',
            'all_items' => 'Todas Redes Sociais',
            'singular_name' => 'Rede Social'
        ),
        'menu_icon' => 'dashicons-share'
    ));

    // experiences and works
    register_post_type('experiences', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'post_type' => 'experiences',
        'labels' => array(
            'name' => 'Experiências',
            'edit_item' => 'Editar Experiência',
            'add_new_item' => 'Adicionar Experiência',
            'add_new' => 'Adicionar Experiência',
            'singular_name' => 'Experiência'
        ),
        'menu_icon' => 'dashicons-cover-image',
        'taxonomies' => array('category'),
        'rewrite' => array(
            'slug' => 'works'
        )
    ));
}

add_action('init', 'customPostTypes');

// enable featured image
add_theme_support('post-thumbnails');

// remove menus from admin sidebar
function post_remove()
{
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');

// custom styles in admin page
function organic_origin_gutenberg_styles()
{
    wp_enqueue_style('organic-origin-gutenberg', get_theme_file_uri('/style.css'), false, '1.0', 'all');
}
add_action('enqueue_block_editor_assets', 'organic_origin_gutenberg_styles');
