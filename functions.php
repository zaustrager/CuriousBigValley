<?php

function waterville() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'waterville' );

function waterville_scripts() {
    wp_enqueue_style( 'waterville-style', get_stylesheet_uri() );
    wp_enqueue_style(
        'waterville-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,300;0,8..60,400;0,8..60,700;1,8..60,300;1,8..60,400;1,8..60,700&display=swap',
        [],
        null
    );
}
add_action( 'wp_enqueue_scripts', 'waterville_scripts' );

function waterville_editor_assets() {
    wp_enqueue_style(
        'waterville-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,300;0,8..60,400;0,8..60,700;1,8..60,300;1,8..60,400;1,8..60,700&display=swap',
        [],
        null
    );
}
add_action( 'enqueue_block_editor_assets', 'waterville_editor_assets' );