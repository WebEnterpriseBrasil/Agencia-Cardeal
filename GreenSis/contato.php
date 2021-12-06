<?php 

/*
Template Name: Contato
*/

?>

<?php get_header(); ?>
<div class="bg">  
<div class="container">  
        <main class="contacto">
            <div class="g-letter"></div>
               
            <H1>Contacto</H1>
            <h2>Tens dúvida? Adoramos conversar com as nossas clientes :)</h2>
            <div>
                <p>Horario de atendimento de segunda a sexta,das 9hs ás 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: (351) 000.000.000 <br> Portugal </p>
                <h2>Comentários ou sugestões:</h2>
                <section class="content">
                    <div class="contato">
                        <form class="form" method="POST" action="email.php">
                            <?php echo do_shortcode('[contact-form-7 id="28" title="Formulário de contacto 1"]'); ?>
                        </form>
                    </div>
                </section>
            </div>

        </main>
</div>
</div>
<?php get_footer(); ?>