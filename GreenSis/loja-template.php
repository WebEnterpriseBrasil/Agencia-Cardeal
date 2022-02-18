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
     <?php echo do_shortcode('[products limit="2" paginate="true" columns="3" orderby="id" order="DESC" visibility="visible"]'); ?>
    </section>
</div>

<?php get_footer(); ?>