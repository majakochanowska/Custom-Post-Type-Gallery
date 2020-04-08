<?php
add_action( 'wp_enqueue_scripts', 'twentytwentychild_enqueue_styles' );
function twentytwentychild_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function twentytwentychild_create_posttype() {
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
add_action( 'init', 'twentytwentychild_create_posttype' );

add_image_size( 'custom-gallery-size', 9999, 600, false );

function twentytwentychild_enqueue_scripts() {
    wp_enqueue_script( 'jQuery', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', false );
    wp_enqueue_script( 'Lightbox', get_stylesheet_directory_uri() . '/js/lightbox.js' );
}
add_action( 'wp_enqueue_scripts', 'twentytwentychild_enqueue_scripts' );

function twentytwentychild_add_fonts() {
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Alegreya+SC&display=swap' );
    wp_enqueue_style( 'onlinewebfonts', 'https://db.onlinewebfonts.com/c/1a045963159927274c92b0444fb83c17?family=Avenir' );
} 
add_action( 'wp_enqueue_scripts', 'twentytwentychild_add_fonts' );

function twentytwentychild_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget za treścią strony', 'twentytwentychild' ),
        'id'            => 'after-content',
        'description'   => __( 'Widget wyświetlany na stronie Galeria za zdjęciami.', 'twentytwentychild' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'twentytwentychild_widgets_init' );