<?php 

/*
Template Name: Home
*/

?>

<?php get_header(); ?>

<section class="foto-sorriso">

            <div class="block text left">
                <div class="inner">
                    <article>
                        <h2>Permita-se <br> experimentar <br> um novo universo <br> de beleza.</h2>
                    </article>
                </div>
            </div>
            <div class="block image right"> 
                <div class="inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/box-home-1.jpg"  class="img-responsive" alt="Sorriso">
                </div>
            </div>

    </section>

    <section class="segunda-sessao">
            <div class="block text left">
                <div class="inner">
                    <article>
                <p> Oferecemos os melhores cosméticos <br> alinhados com o nosso propósito: trazer para <br> si um novo olhar para o mercadode beleza. <br> Produtos voltados para o clean beauty <br> (beleza limpa) e cruety free. </p>
                <a href="Loja.html"  class="btn-gs"> conheça a loja </a>
                </article>  
                </div>
            </div>
            <div class="block image right">
                <div class="inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/box-home-2.jpg" class="img-responsive" alt="Herbes">
                </div>
            </div>
    </section>

    <section class="terceira-sessao">
            
            <div class="block image left">
                <div class="inner" >
                    <img src="<?php echo get_template_directory_uri(); ?>/img/box-home-3.jpg" class="img-responsive" alt="Beiramar">
                </div>
            </div>    
            <div class="block text right">
                <div class="inner">
                    <article>
                        <h2>Sis</h2>
                        <h3>Duas irmãs e um sonho: <br> trabalhar com propósito</h3>
                    </article>
                </div>
            </div>
            

    </section>

<?php get_footer(); ?>