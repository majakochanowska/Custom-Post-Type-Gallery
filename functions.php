<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function create_posttype() {
    register_post_type( 'Galeria',
    array(
      'labels' => array(
       'name' => __( 'Galeria' ),
       'singular_name' => __( 'zdjęcie' ),
       'all_items' => __( 'Wszystkie zdjęcia')
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'galeria'),
      'supports' => array( 'title', 'thumbnail' ),
      'query_var' => true,
     )
    );
    }
    add_action( 'init', 'create_posttype' );

    