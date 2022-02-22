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
            <div class="contacto-info">  
                <p>Horário de atendimento: segunda a sexta, das 9h às 18h<br>
                Email: atendimento@greensis.pt<br></p>
                <div class="whatsapp-footer"> 
                    <p> Whats app: </p>
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'my_whatsapp' 
                            ) 
                        ); 
                    ?>
                </div>
                <div class="portugal">
                    <p><br> Portugal </p>
                </div>
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