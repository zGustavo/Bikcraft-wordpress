<?php
    // Template Name: Home
    get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="introducao">
    <div class="container">
        <h1>Bicicletas Feitas a Mão</h1>
        <blockquote class="quote-externo">
            <p>"não tenha nada em sua casa que você não considere útil ou acredita ser bonito</p>
            <cite>WILLIAM MORRIS</cite>
        </blockquote>
        <a href="produtos.html" class="btn">Orçamento</a>
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
        <p>clique aqui e veja os detalhes dos produtos</p>
        <a href="produtos.html" class="btn btn-preto">Produtos</a>
    </div>

</section>

<section class="portfolio">
    <div class="container">
        <h2 class="subtitulo">Portfólio</h2>
        <ul class="portfolio_lista">
            <li>
                <div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/public/img/portfolio/retro.jpg" alt="Bicicleta Retro"></div>
                <div class="grid-8"><img src="<?php echo get_template_directory_uri(); ?>/public/img/portfolio/passeio.jpg" alt="Bicicleta passeio"></div>
                <div class="grid-16"><img src="<?php echo get_template_directory_uri(); ?>/public/img/portfolio/esporte.jpg" alt="Bicicleta esporte"></div>
            </li>
        </ul>

        <div class="call">
            <p>Conheça mais o nosso Portfólio</p>
            <a href="produtos.html" class="btn">Portfólio</a>
        </div>
    </div>
</section>

<section class="qualidade container">
    <h2 class="subtitulo">Qualidade</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/public/img/bikcraft-qualidade.png" alt="Bikcraft">
    <ul class="qualidade_lista">
        <li class="grid-1-3">
            <h3>Durabilidade</h3>
            <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
        </li>

        <li class="grid-1-3">
            <h3>Design</h3>
            <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
        </li>

        <li class="grid-1-3">
            <h3>Sustentabilidade</h3>
            <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
        </li>
    </ul>

    <div class="call">
        <p>Conheça mais a nossa história</p>
        <a href="sobre.html" class="btn btn-preto">Sobre</a>
    </div>
</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>