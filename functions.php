<?php

/**
* Enqueue Styles
*/
function bibliotheque_styles() {
    wp_register_style( 'bibliotheque_css', get_template_directory_uri() . '/assets/css/bibliotheque.css', array(), '1.0' );
    wp_register_style( 'bibliotheque_theme', get_template_directory_uri() . '/style.css', array(), '1.0' );

    wp_enqueue_style( 'bibliotheque_css' );
    wp_enqueue_style( 'bibliotheque_theme' );
}

add_action( 'wp_enqueue_scripts', 'bibliotheque_styles' );

function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);


/**
* Enqueue Scripts
*/

function bibliotheque_scripts() {
    wp_enqueue_script( 'bibliotheque_js', get_template_directory_uri() . '/assets/js/bibliotheque.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'bibliotheque_scripts' );


/**
* Customize Options
*/

// require get_template_directory() . '/inc/customizer/options.php';


/**
* Menus
*/

function bibliotheque_menus() {
    register_nav_menus( array(
        'primary-menu' => __('Primary Menu', 'bibliotheque'),
        'social-menu' => __('Social Media Menu', 'bibliotheque')
        ) );
    }
    
    add_action( 'init', 'bibliotheque_menus' );

/**
* Blogging
*/

// excerpt length
function bibliotheque_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'bibliotheque_excerpt_length', 999 );

/**
* Sidebar
*/

function bibliotheque_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left bottom widgets', 'bibliotheque' ),
        'id'            => 'widgets-left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Right bottom widgets', 'bibliotheque' ),
        'id'            => 'widgets-right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Left footer widgets', 'bibliotheque' ),
        'id'            => 'footer-left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Right footer widgets', 'bibliotheque' ),
        'id'            => 'footer-right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init', 'bibliotheque_widgets_init');


// Include Kirki and Customizer Options
locate_template('/inc/customizer/kirki/kirki.php', true, true);
if (class_exists('Kirki')) {
	locate_template('/inc/customizer/options.php', true, true);
}
