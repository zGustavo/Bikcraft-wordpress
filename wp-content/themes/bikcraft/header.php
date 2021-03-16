<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?php bloginfo('name'); ?> </title>
        <meta name="description" content="Compre sua Bicicleta Personalizada na Bikcraft.
        Possuímos modelos Passeio, Retrô e Esporte">

        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php bloginfo('name'); ?>">
        <meta property="og:description" content="Compre sua Bicicleta Personalizada na Bikcraft.
        Possuímos modelos Passeio, Retrô e Esporte">
        <meta property="og:url" content="http://bikcraft.com">
        <meta property="og:image" content="http://bikcraft.com/img/op-image.png">

        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        
        <!--Inicio Wordpress Header-->
        <?php wp_head(); ?>
        <!--Fim Wordpress Header-->

    </head>
    <body>

        <header class="header">
            <div class="container">
                <a href="/bikcraftwp/" class="grid-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/img/bikcraft.png" alt="Bikcraft">
                </a>

                <nav class="grid-12 header_menu">
                    <?php 
                        $args = array(
                            'menu' => 'principal',
                            'theme_location' => 'menu-principal',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </nav>
            </div>
        </header>
