<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('open-icon');
            const closeIcon = document.getElementById('close-icon');

            menuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden'); // Alterna visibilidade do menu
                openIcon.classList.toggle('hidden');   // Alterna ícones
                closeIcon.classList.toggle('hidden');
            });
        });
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="mt-4 relative z-10"> <!-- Adiciona um z-index para garantir que o header esteja no topo -->
        <nav class="bg-white">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <!-- Mobile menu button-->
                    <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                        <button id="mobile-menu-button" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg id="open-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg id="close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Custom logo -->
                    <div class="flex flex-1 items-center justify-start">
                        <?php if ( has_custom_logo() ) : ?>
                            <div class="flex-shrink-0">
                                <?php the_custom_logo(); ?>
                            </div>
                        <?php else : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-lg font-semibold text-gray-700">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- Desktop Menu (aligned to the right) -->
                    <div class="hidden sm:block sm:ml-auto">
                        <div class="flex space-x-4">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'container'      => '',
                                    'menu_class'     => 'flex space-x-4',
                                    'link_before'    => '<span class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white">',
                                    'link_after'     => '</span>',
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 text-right">
                   <!-- Seções Adicionais -->
            <?php
            $sections = [
                'Menu' => [
                    
                    'Home' => '/',
                    //'Portfolio'   => 'https://camistudio.com.br/infomedia/potfolio/',
                    //'Nosso time'  => 'https://camistudio.com.br/infomedia/nosso-time/',
                    //'Contato'  => 'https://camistudio.com.br/infomedia/contato/',
                    //'Apresentação'  => 'https://camistudio.com.br/infomedia/apresentacao/',
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
        </nav>
    </header>
    <?php wp_footer(); ?>
</body>
</html>
