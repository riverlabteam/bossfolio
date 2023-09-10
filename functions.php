<?php
// Enfileira os scripts e estilos do template
if ( !function_exists('bossfolio_enqueue_style_scripts') ) {
    function bossfolio_enqueue_style_scripts() {
        // Registra o estilo principal do template
        wp_register_style(
            'bossfolio-main',
            get_template_directory_uri() . '/assets/css/main.css',
            [],
            filemtime( get_template_directory() . '/assets/css/main.css' )
        );

        // Enfileira o estilo principal do template
        wp_enqueue_style('bossfolio-main');
    }

    add_action('wp_enqueue_scripts', 'bossfolio_enqueue_style_scripts');
}

// Suportes do template
if ( !function_exists('bossfolio_theme_supports') ) {
    function bossfolio_theme_supports() {
        add_theme_support( 'title-tag' );
    }

    add_action('after_setup_theme', 'bossfolio_theme_supports');
}