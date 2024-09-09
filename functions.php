<?php

/**
 * Enfileira os estilos e scripts do tema.
 */
function meu_theme_enqueue_assets() {
    // Remover o estilo padrão
    // wp_dequeue_style( 'theme-style' );

    // Enfileirando o novo estilo gerado pelo Tailwind CSS
    wp_enqueue_style( 'tailwind-build', get_template_directory_uri() . '/path/to/tailwind-build.css', [], wp_get_theme()->get('Version') );

    // Enfileirando o script Alpine.js (ou outra biblioteca JS)
    wp_enqueue_script( 'alpinejs', '//unpkg.com/alpinejs', [], null, true );

    // Enfileirando um script JavaScript customizado
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', [], wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'meu_theme_enqueue_assets' );

/**
 * Configurações do tema.
 */
function theme_tail_starter_setup() {
    // Suporte para logotipo personalizado
    add_theme_support( 'custom-logo', [
        'width'       => 200, // Largura máxima do logotipo
        'height'      => 100, // Altura máxima do logotipo
        'flex-width'  => true, // Permite largura flexível
        'flex-height' => true, // Permite altura flexível
    ]);

    // Registro de menus
    register_nav_menus([
        'primary' => __( 'Primary Menu', 'seu-text-domain' ),
        'footer'  => __( 'Footer Menu', 'seu-text-domain' ),
    ]);
}
add_action( 'after_setup_theme', 'theme_tail_starter_setup' );

?>
