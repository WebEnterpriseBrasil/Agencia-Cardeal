<?php 

/*
Template Name: Home
*/

?>

<?php get_header(); ?>
<section class="foto-sorriso">
        <div class="container">
            <div class="block text">
                <h2>Permita-se <br> experimentar <br> um novo universo <br> de beleza.</h2>
            </div>
            <div class="block image"> 
                <img src="<?php echo get_template_directory_uri(); ?>/img/home-section-1-img-1.jpeg"  class="img-responsive" alt="Sorriso">
            </div>
        </div>
    </section>

    <section class="segunda-sessao">
        <div class="container">
            <div class="block text">
                <p> Oferecemos os melhores cosméticos <br> alinhados com o nosso propósito: trazer para <br> si um novo olhar para o mercadode beleza. <br> Produtos voltados para o clean beauty <br> (beleza limpa) e cruety free. </p>
                <a href="Loja.html"> conheça a loja </a>
            </div>    
            <div class="block image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/home-section-2-img-1.jpg" class="img-responsive" alt="Herbes">
            </div>
        </div>
    </section>

    <section class="terceira-sessao">
        <div class="container">
            <div class="block image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/home-section-3-img-1.jpeg" class="img-responsive" alt="Beiramar">
            </div>    
            <div class="block text">
                <div class="content">
                    <h2>Sis</h2>
                    <h3>Duas irmãs e um sonho: <br> trabalhar com propósito</h3>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>