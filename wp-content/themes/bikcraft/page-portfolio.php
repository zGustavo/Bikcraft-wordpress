<?php
    // Template Name: Portfolio
    get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . "/public/inc/introducao.php"); ?>

<section class="container animar-interno">
    <ul class="rslides">
        <li>
            <blockquote class="quote_clientes">
                <p>"No mundo atual, a contínua expansão de nossa atividade cumpre um papel
                    essencial na formulação da gestão inovadora da qual fazermos parte.""
                </p>
                <cite>Barbara Moss</cite>
            </blockquote>
        </li>

        <li>
            <blockquote class="quote_clientes">
                <p>"No mundo atual, a contínua expansão de nossa atividade cumpre um papel
                    essencial na formulação da gestão inovadora da qual fazermos parte.""
                </p>
                <cite>João Fibi</cite>
            </blockquote>
        </li>

        <li>
            <blockquote class="quote_clientes">
                <p>"No mundo atual, a contínua expansão de nossa atividade cumpre um papel
                    essencial na formulação da gestão inovadora da qual fazermos parte.""
                </p>
                <cite>Maria Fon</cite>
            </blockquote>
        </li>
    </ul>
</section>

<section class="portfolio">
    <div class="container">
        <ul class="portfolio_lista rslides_portfolio">
            <li>
                <div class="grid-8"><img src="public/img/portfolio/retro.jpg" alt="Bicicleta Retro"></div>
                <div class="grid-8"><img src="public/img/portfolio/passeio.jpg" alt="Bicicleta passeio"></div>
                <div class="grid-16"><img src="public/img/portfolio/esporte.jpg" alt="Bicicleta esporte"></div>
            </li>

            <li>
                <div class="grid-8"><img src="public/img/portfolio/passeio.jpg" alt="Bicicleta passeio"></div>
                <div class="grid-8"><img src="public/img/portfolio/retro.jpg" alt="Bicicleta Retro"></div>
                <div class="grid-16"><img src="public/img/portfolio/esporte.jpg" alt="Bicicleta esporte"></div>
            </li>
        </ul>
    </div>
</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>