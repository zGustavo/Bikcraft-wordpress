<?php
// Template Name: Home
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="introducao">
            <div class="container">
                <h1> <?php the_field('titulo_introducao'); ?> </h1>
                <blockquote class="quote-externo">
                    <p><?php the_field('quote-introducao'); ?> </p>
                    <cite><?php the_field('citacao_introducao'); ?> </cite>
                </blockquote>
                <a href="/bikcraftwp/produtos/" class="btn">Orçamento</a>
            </div>
        </section>

        <section class="produtos container animar">
            <h2 class="subtitulo">Produtos</h2>
            <ul class="produtos_lista">
                <li class="grid-1-3">
                    <div class="produtos_icone">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/img/produtos/passeio.png" alt="Bikcraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
                </li>

                <li class="grid-1-3">
                    <div class="produtos_icone">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/img/produtos/esporte.png" alt="Bikcraft esporte">
                    </div>
                    <h3>Esporte</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
                </li>

                <li class="grid-1-3">
                    <div class="produtos_icone">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/img/produtos/retro.png" alt="Bikcraft retro">
                    </div>
                    <h3>Retro</h3>
                    <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
                </li>

            </ul>

            <div class="call">
                <p><?php the_field('chamada_produtos'); ?> </p>
                <a href="/bikcraftwp/produtos/" class="btn btn-preto">Produtos</a>
            </div>

        </section>

        <section class="portfolio">
            <div class="container">
                <h2 class="subtitulo">Portfólio</h2>
                <?php include(TEMPLATEPATH . "/public/inc/clientes-portfolio.php"); ?>
            </div>
        </section>

        <?php include(TEMPLATEPATH . "/public/inc/qualidade.php"); ?>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>