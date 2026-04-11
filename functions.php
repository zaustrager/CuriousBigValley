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


/**
 * About Page — functions.php snippets
 * ====================================
 * Add these to your theme's functions.php.
 * Do NOT replace your entire functions.php with this file.
 */


// ── 1. Enqueue the About page stylesheet only on that template ──────────────

function theme_enqueue_about_styles()
{
    if (is_page_template('page-about.php')) {
        wp_enqueue_style(
            'about-page',
            get_template_directory_uri() . '/assets/css/about-page.css',
            [],
            wp_get_theme()->get('Version')
        );

        // Enqueue Google Fonts (Playfair Display + DM Sans)
        wp_enqueue_style(
            'about-page-fonts',
            'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@400;600&display=swap',
            [],
            null
        );
    }
}

add_action('wp_enqueue_scripts', 'theme_enqueue_about_styles');


// ── 2. Register the "team_member" Custom Post Type ──────────────────────────
// Remove this block if you already have a team CPT or prefer to use ACF fields.

function theme_register_about_meta()
{
    $fields = [
        '_about_hero_headline',
        '_about_hero_subtext',
        '_about_hero_image',
        '_about_story',
        '_about_values',   // serialized array
        '_about_stats',    // serialized array
        '_about_quote',
        '_about_quote_attr',
        '_about_cta_heading',
        '_about_cta_sub',
        '_about_cta_url',
        '_about_cta_label',
    ];

    foreach ($fields as $field) {
        register_post_meta('page', $field, [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
            'auth_callback' => fn() => current_user_can('edit_posts'),
        ]);
    }
}

add_action('init', 'theme_register_about_meta');

function theme_enqueue_about_page_styles() {
    wp_enqueue_style(
        'about-page-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@400;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'about-page',
        get_template_directory_uri() . '/assets/css/about-page.css',
        [ 'about-page-fonts' ],
        wp_get_theme()->get( 'Version' )
    );
}
// Hook to wp_enqueue_scripts so it loads on the front end
add_action( 'wp_enqueue_scripts', 'theme_enqueue_about_page_styles' );

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/zaustrager/waterville-valley',
    __FILE__,
    'waterville-valley'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');