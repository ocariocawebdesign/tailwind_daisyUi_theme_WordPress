<?php get_header(); ?>
<script src="https://cdn.tailwindcss.com"></script>

<!-- Início do conteúdo -->
<div id="content" class="container bg-white mx-auto max-w-4xl py-8 px-4"> <!-- bg-body alterado para bg-white -->
    
    <!-- Imagem centralizada -->
    <div class="flex justify-center mb-6 index-block-d-none">
        <img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Screenshot do Tema" class="w-1/2">
    </div>
    
    <!-- Código simulado no estilo "mockup-code" -->
    <div class="flex justify-center mb-6 index-block-d-none">
        <div class="mockup-code w-full max-w-md">
            <pre data-prefix="$"><code>npm i daisyui</code></pre>
        </div>
    </div>
    
    <!-- Título da página centralizado -->
    <h1 class="text-3xl text-center font-bold mb-6 index-block-d-none">
        <?php the_title(); ?>
    </h1>
    
    <!-- Conteúdo da página -->
    <main class="prose mx-auto bg-white"> <!-- bg-body alterado para bg-white -->
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p class="text-center">Sem conteúdo encontrado.</p>';
        endif;
        ?>
    </main>
</div>

<?php get_footer(); ?>
