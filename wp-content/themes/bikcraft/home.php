<?php get_header(); ?>

<section class="introducao_interna introducao-blog">
    <div class="container">
        <h1>Blog</h1>
        <p>As principais noticias sobre Bicicletas</p>
    </div>
</section>

<div class="container blog-container">

    <?php if(have_posts() ) : while (have_posts() ) : the_post(); ?>
        <article class="grid-16 blog-post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        </article>

    <?php endwhile; ?>

    <div class="nav-blog grid-16">
        <?php next_post_link('<- Posts Antigos'); ?>
        <?php previous_post_link('Post Novos ->'); ?>
    </div>

    <?php else: endif; ?>

</div>

<?php get_footer(); ?>