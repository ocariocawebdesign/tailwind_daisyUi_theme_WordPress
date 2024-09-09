<?php
/**
 * Footer Template
 */
?>

<footer class="bg-gray-100 text-gray-700 body-font">
    <div class="container mx-auto px-5 py-24 flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        
        <!-- Logo e Descrição -->
        <div class="w-64 flex-shrink-0 mx-auto text-center md:text-left">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex title-font font-medium items-center justify-center md:justify-start text-gray-900">
                <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="text-xl"><?php bloginfo('name'); ?></span>
                <?php endif; ?>
            </a>
            <p class="mt-2 text-sm text-gray-500"><?php bloginfo('description'); ?></p>
            
            <!-- Ícones Sociais -->
            <div class="mt-4 flex justify-center md:justify-start">
                <?php
                // Exemplo de ícone social: Facebook
                $social_icons = [
                    [
                        'url' => '#', // URL do perfil social
                        'icon' => '<svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>',
                    ],
                    [
                        'url' => '#', // URL do Twitter
                        'icon' => '<svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012.9 8.48v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>',
                    ],
                    // Adicione outros ícones sociais aqui
                ];

                foreach ($social_icons as $icon) {
                    echo '<a href="' . esc_url($icon['url']) . '" class="ml-3 text-gray-500 hover:text-gray-700">' . $icon['icon'] . '</a>';
                }
                ?>
            </div>
        </div>
        
        <!-- Menus e Links -->
        <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 mt-10 md:mt-0">
            
            <!-- Menu de Navegação do Footer -->
            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Menu</h2>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'menu_class'     => 'list-none mb-10',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => false,
                    'link_before'    => '<span class="text-gray-500 hover:text-gray-900">',
                    'link_after'     => '</span>',
                ]);
                ?>
            </div>
            
            <!-- Seções Adicionais -->
            <?php
            $sections = [
                'Suporte' => [
                    'Contato' => '#',
                    'FAQ'             => '#',
                ],
                'Sobre' => [
                    'Nossa História'  => '#',
                  
                ],
                'Legal' => [
                    'Privacy Policy' => '#',
                    
                ],
            ];

            foreach ($sections as $section_title => $links) {
                echo '<div class="w-full md:w-1/2 lg:w-1/4 px-4">';
                echo '<h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">' . esc_html($section_title) . '</h2>';
                echo '<nav class="list-none mb-10">';
                foreach ($links as $link_text => $link_url) {
                    echo '<li><a href="' . esc_url($link_url) . '" class="text-gray-500 hover:text-gray-900">' . esc_html($link_text) . '</a></li>';
                }
                echo '</nav></div>';
            }
            ?>
            
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="bg-gray-200">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-700 text-sm text-center sm:text-left">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Desenvolvido por <a href="https://camistudio.com.br" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">Carlos Abreu </a> - Todos os direitos reservados.
            </p>
            
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
