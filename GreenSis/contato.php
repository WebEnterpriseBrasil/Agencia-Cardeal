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
               
            <H1 class="heading-2">Contacto</H1>
            <h2 class="heading-3">Tens dúvida? Adoramos conversar com as nossas clientes :)</h2>
            <div>  
                <p>Horário de atendimento: segunda a sexta, das 9h às 18h<br>
                Email: atendimento@greensis.pt <br>
                Whats app: <a href="https://wa.me/351915332628" target="_blank">(351) 915.332.628</a> <br>
                Portugal </p>
                <h2>Comentários ou sugestões:</h2>
                <section class="content">
                    <div class="contato">
                        <?php echo do_shortcode('[contact-form-7 id="28" title="Formulário de contacto"]'); ?>
                    </div>
                </section>
            </div>

        </main>
</div>
</div>
<?php get_footer(); ?>