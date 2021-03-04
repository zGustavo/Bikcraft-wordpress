<?php
    // Template Name: Produtos
    get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . "/public/inc/introducao.php"); ?>


<section class="container produto_item animar-interno">
    <div class="grid-11">
        <img src="public/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft passeio">
        <h2>Passeio</h2>
    </div>
    <div class="grid-5 produto_icone">
        <img src="public/img/produtos/passeio.png" alt="">
    </div>
    <div class="grid-8">
        <img src="public/img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft passeio">
    </div>
    <div class="grid-8 produto_info">
        <p>No mundo atual, a contínua expansão de nossa, atividade cumpre um papel essencial na formula da gestão
        </p>
        <ul>
            <li>Conforto</li>
            <li>Velocidade</li>
            <li>Design</li>
            <li>Versatilidade</li>
        </ul>
    </div>
</section>

<section class="container produto_item">
    <div class="grid-11">
        <img src="public/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft esporte">
        <h2>Esporte</h2>
    </div>
    <div class="grid-5 produto_icone">
        <img src="public/img/produtos/esporte.png" alt="">
    </div>
    <div class="grid-8">
        <img src="public/img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft passeio">
    </div>
    <div class="grid-8 produto_info">
        <p>No mundo atual, a contínua expansão de nossa, atividade cumpre um papel essencial na formula da gestão
        </p>
        <ul>
            <li>Conforto</li>
            <li>Velocidade</li>
            <li>Design</li>
            <li>Versatilidade</li>
        </ul>
    </div>
</section>

<section class="container produto_item animar">
    <div class="grid-11">
        <img src="public/img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retro">
        <h2>Retro</h2>
    </div>
    <div class="grid-5 produto_icone">
        <img src="public/img/produtos/retro.png" alt="">
    </div>
    <div class="grid-8">
        <img src="public/img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retro">
    </div>
    <div class="grid-8 produto_info">
        <p>No mundo atual, a contínua expansão de nossa, atividade cumpre um papel essencial na formula da gestão
        </p>
        <ul>
            <li>Conforto</li>
            <li>Velocidade</li>
            <li>Design</li>
            <li>Versatilidade</li>
        </ul>
    </div>
</section>

<section class="orcamento">
    <div class="container">
        <h2 class="subtitulo">Orçamento</h2>
        <form action="enviar.php" method="post" name="form" class="formphp form grid-8">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text">
            <label for="email">E-mail</label>
            <input id="email" name="email" type="text">
            <label for="telefone">Telefone</label>
            <input id="telefone" name="telefone" type="text">

            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://">

            <label for="mensagem">Especificações</label>
            <textarea name="mensagem" id="mensagem"></textarea>

            <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
        </form>

        <div class="orcamento_dados grid-8">
            <h3>Dados</h3>
            <span>+55 21 93223-3232</span>
            <span>orcamento@bikcraft.com</span>
            <h3>Monte sua Bikcraft</h3>
            <p>Escolha as especificações</p>
            <ul>
                <li>-Cores</li>
                <li>-Estilo</li>
                <li>-Medidas</li>
                <li>-Acessórios</li>
                <li>E Outros</li>
            </ul>
        </div>
    </div>
</section>


<?php endwhile; else: endif; ?>
<?php get_footer(); ?>