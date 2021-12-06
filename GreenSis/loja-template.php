<?php 

/*
Template Name: Loja
*/

?>

<?php get_header(); ?>

<div class="container">
    <section class="loja-texto">
        <div>
            <h1>Loja</h1>
            <div>
                <p> Nossos produtos foram cuidadosamente escolhidos a pensar em nossas clientes<br>
                Selecionamos os fornecedores e os melhores produtos clean beauty (beleza limpa) e cruety free do mercado:</p>
            </div>
        </div>
    </section>

    
    <section class="servicos">
        <div class="produto">
            <img src="<?php echo get_template_directory_uri(); ?>/imagens_paginas_1_a_8/P3_One_Hebes.jpg" alt="Hebes Folles">
            <div>
                <h1>Diáfano</h1>
                <h2>€33,50 EUR</h2>
                <p>Óleo de limpeza equilibrante <br>
                    Herbes Folles, 100 ml
                </p>
                <a href="#">Quero comprar</a>
            </div>
        </div>
        <div class="produto">
            <img src="<?php echo get_template_directory_uri(); ?>/imagens_paginas_1_a_8/P3_two_Upcircle.jpg" alt="Upcircle">
            <div>
                <h1>Bálsamo limpeza facial</h1>
                <h2>€21,99 EUR</h2>
                <p>Bálsamo de limpeza facial diário<br>
                    Upcircle, 50 m
                </p>
                <a href="#">Quero comprar</a>
            </div>
        </div>
        <div class="produto">
            <img src="<?php echo get_template_directory_uri(); ?>/imagens_paginas_1_a_8/P3_Three_Upcircle.jpg" alt="Upcircle">
            <div>
                <h1>Creme Hidratante - Rosto</h1>
                <h2>€21,99 EUR</h2>
                <p>Creme de dia natural <br>
                    Upcircle, 50 ml
                </p>
                <a href="#">Quero comprar</a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>