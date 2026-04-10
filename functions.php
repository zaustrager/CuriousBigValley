<?php

function waterville() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'waterville' );

function waterville_scripts() {
    wp_enqueue_style( 'waterville-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'waterville_scripts' );