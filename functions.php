php
<?php

/**
 * ITENTER Enterprise Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Theme Setup
 */
function itenter_theme_setup() {

    /*
     * WordPress document title
     */
    add_theme_support( 'title-tag' );


    /*
     * Featured images
     */
    add_theme_support( 'post-thumbnails' );


    /*
     * Custom logo
     */
    add_theme_support(
        'custom-logo',
        [
            'height'      => 80,
            'width'       => 250,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );
    /*
     * HTML5 support
     */
    add_theme_support(
        'html5',
        [
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );


    /*
     * Navigation
     */
    register_nav_menus(
        [
            'primary_menu' => __( 'Primary Menu', 'itenter' ),
        ]
    );
}

add_action(
    'after_setup_theme',
    'itenter_theme_setup'
);


/**
 * Enqueue Theme Assets
 */
function itenter_enqueue_assets() {

    $theme = wp_get_theme();
    /*
     * Main CSS
     */
    wp_enqueue_style(
        'itenter-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $theme->get( 'Version' )
    );


    /*
     * Main JavaScript
     */
    wp_enqueue_script(
        'itenter-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $theme->get( 'Version' ),
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'itenter_enqueue_assets'
);