<?php wp_footer(); 


        if ( is_front_page() ) : ?>
            <footer class="rodape footer-padrao">
                <div class="bg">
                    <div class="container">
                        <h2>Contacto</h2>
                        <h3>Tens dúvida? Adoramos conversar com as nossas clientes :)</h3>
                        <div>
                            <p>Horario de atendimento de segunda a sexta,das 9hs ás 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: (351) 000.000.000 <br> Portugal </p>
            
                            <p>Envios e devolução | Termos &amp; condições | Politica de Privacidade | Livro de reclamações</p>
                            <h4>Copyright 2021 © greensis</h4>
                        </div>
                        <div class="g-letter" style="height: 900px;"></div>
                    </div>
                </div>
            </footer>

            <?php
        else : ?>
            
<footer class="rodape rodape-gs">
    <div class="bg">
    <div class="container">
        <h2>Contacto</h2>
        <h3>Tens dúvida? Adoramos conversar com as nossas clientes :)</h3>
        <div>
            <p>Horario de atendimento de segunda a sexta,das 9hs ás 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: (351) 000.000.000 <br> Portugal </p>

            <p>Envios e devolução | Termos & condições | Politica de Privacidade | Livro de reclamações</p>
            <h4>Copyright 2021 © greensis</h4>
        </div>
        <div class="g-letter-pequeno"></div>
    </div>
    </div>
</footer>

            <?php
        endif;

?>


<div class="overlay d-none"></div>
    
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/template-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/index-min.js"></script>

</body>
</html>