<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'cinema_movie_director_after_setup_theme' );
function cinema_movie_director_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'cinema-movie-director-featured-image', 2000, 1200, true );
    add_image_size( 'cinema-movie-director-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => '1c1c1c'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function cinema_movie_director_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'cinema-movie-director' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'cinema-movie-director' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'cinema-movie-director' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'cinema-movie-director' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'cinema-movie-director' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'cinema-movie-director' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'cinema-movie-director' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'cinema-movie-director' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'cinema_movie_director_widgets_init' );

// enqueue styles for child theme
function cinema_movie_director_enqueue_styles() {
    
    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'cinema-movie-director-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'cinema-movie-director-child-style' ), '1.0' );
    
    // enqueue parent styles
    wp_enqueue_style('film-maker-lite-style', get_template_directory_uri() .'/style.css');
    
    // enqueue child styles
    wp_enqueue_style('film-maker-lite-child-style', get_stylesheet_directory_uri() .'/style.css', array('film-maker-lite-style'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );    
}
add_action('wp_enqueue_scripts', 'cinema_movie_director_enqueue_styles');

function cinema_movie_director_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'cinema-movie-director-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'cinema_movie_director_admin_scripts' );

add_action( 'init', 'cinema_movie_director_remove_my_action');
function cinema_movie_director_remove_my_action() {
    remove_action( 'admin_menu','film_maker_lite_menu' );
    remove_action( 'admin_notices','film_maker_lite_activation_notice' );
}

if ( ! defined( 'FILM_MAKER_LITE_PRO_THEME_NAME' ) ) {
    define( 'FILM_MAKER_LITE_PRO_THEME_NAME', esc_html__( 'Cinema Movie Director Pro', 'cinema-movie-director' ));
}
if ( ! defined( 'FILM_MAKER_LITE_PRO_THEME_URL' ) ) {
    define( 'FILM_MAKER_LITE_PRO_THEME_URL', esc_url('https://www.themespride.com/themes/movie-director-wordpress-theme/'));
}