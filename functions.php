<?php
/**
 * MB Euro Tech Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'MBEUROTECH_VERSION' ) ) {
    define( 'MBEUROTECH_VERSION', '1.0.0' );
}

/**
 * Theme Setup
 */
function mbeurotech_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'mbeurotech' ),
        'footer'  => esc_html__( 'Footer Menu', 'mbeurotech' ),
    ) );
}
add_action( 'after_setup_theme', 'mbeurotech_setup' );

/**
 * Enqueue Scripts and Styles
 */
function mbeurotech_scripts() {
    // Fonts: Manrope
    wp_enqueue_style( 'mbeurotech-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&display=swap', array(), null );
    
    // Material Symbols
    wp_enqueue_style( 'material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );
    
    // Main Style
    wp_enqueue_style( 'mbeurotech-style', get_stylesheet_uri(), array( 'mbeurotech-fonts' ), MBEUROTECH_VERSION );
    
    // Main JS
    wp_enqueue_script( 'mbeurotech-main', get_template_directory_uri() . '/assets/js/main.js', array(), MBEUROTECH_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'mbeurotech_scripts' );

/**
 * Filter to add class to menu links
 */
function mbeurotech_menu_link_class( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && $args->theme_location === 'primary' ) {
        $atts['class'] = 'nav__link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'mbeurotech_menu_link_class', 10, 3 );

/**
 * Fallback menu when no menu is assigned in the dashboard
 */
function mbeurotech_default_menu() {
    $items = array(
        'Home'       => home_url( '/' ),
        'Services'   => home_url( '/services/' ),
        'Expert Hub' => home_url( '/expert-hub/' ),
        'About'      => home_url( '/about/' ),
        'Contact'    => home_url( '/contact/' ),
    );

    echo '<ul class="nav__list">';
    foreach ( $items as $label => $url ) {
        echo '<li><a href="' . esc_url( $url ) . '" class="nav__link">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Fallback menu for footer
 */
function mbeurotech_footer_menu() {
    $items = array(
        'Home'       => home_url( '/' ),
        'Services'   => home_url( '/services/' ),
        'Expert Hub' => home_url( '/expert-hub/' ),
        'About'      => home_url( '/about/' ),
        'Contact'    => home_url( '/contact/' ),
    );

    echo '<ul class="footer__menu">';
    foreach ( $items as $label => $url ) {
        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}
