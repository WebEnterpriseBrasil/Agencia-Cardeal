<?php wp_footer(); 


        if ( is_front_page() ) : ?>
            <footer class="rodape">
                <div class="container">
                    <h2 class="heading-2">Contacto</h2>
                    <h3 class="heading-3">Tens dúvida? Adoramos conversar com as nossas clientes :)</h3>
                    <div>
                        <p class="heading-6">Horario de atendimento de segunda a sexta,das 9hs ás 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: (351) 000.000.000 <br> Portugal </p>
                        
                        
                        <nav class="heading-6">
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'my_footer_menu' 
                                    ) 
                                ); 
                        ?>
                        </nav>
                        <p class="heading-7">Copyright 2021 © greensis</p>
                    </div>
                    <div class="g-letter"></div>
                </div>
            </footer>

            <?php
        else : ?>
            
            <footer class="rodape rodape-gs">

                <div class="container">
                    <h2 class="heading-2">Contacto</h2>
                    <h3 class="heading-3">Tens dúvida? Adoramos conversar com as nossas clientes :)</h3>
                    <div>
                        <p class="heading-6">Horario de atendimento de segunda a sexta,das 9hs ás 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: (351) 000.000.000 <br> Portugal </p>
                        <nav class="heading-6">
                            <?php 
                                wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'my_footer_menu' 
                                        ) 
                                    ); 
                            ?>
                        </nav>
                        <p class="heading-7">Copyright 2021 © greensis</p>
                    </div>
                    <div class="g-letter-pequeno"></div>

                </div>
            </footer>

            <?php
        endif;

?>


<div class="overlay d-none"></div>

<script src="<?php echo get_template_directory_uri(); ?>/dist/js/template-min.js"></script>

    <?php 
        if ( is_front_page() ) : ?>  

        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/index-min.js"></script>

    <?php
        endif;

    ?>
   
    

</body>
</html>