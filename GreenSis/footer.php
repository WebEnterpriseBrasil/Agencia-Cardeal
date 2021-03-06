<?php wp_footer(); 

    if (is_page_template('home-template.php')) { ?>

        <footer class="rodape">
        <div class="container">
            <h2 class="heading-2">Contacto</h2>
            <h3 class="heading-3">Tens dúvida? Adoramos conversar com as nossas clientes :)</h3>
            <div>
                <p class="heading-6">Horario de atendimento: segunda a sexta, das 9hs às 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: <a href="https://wa.me/351915332628" target="_blank">(351) 915.332.628</a> <br> Portugal </p>
                
                
                <nav class="heading-6">
                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'my_footer_menu' 
                            ) 
                        ); 
                ?>
                </nav>
                <p class="heading-7">Copyright <span class="year"></span> © greensis</p>
            </div>
            <div class="g-letter"></div>
        </div>
    </footer>



    <?php

    } else if (is_page_template('contato.php')) { ?>




        <footer class="rodape rodape-gs ">

        <div class="container">
            <div>
                <nav class="heading-6">
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'my_footer_menu' 
                                ) 
                            ); 
                    ?>
                </nav>
                <p class="heading-7">Copyright <span class="year"></span> © greensis</p>
            </div>
            <div class="g-letter-pequeno"></div>

        </div>
    </footer>


    <?php

    } else {  ?>
        
        
        
        <footer class="rodape rodape-gs">

                <div class="container">
                    <h2 class="heading-2">Contacto</h2>
                    <h3 class="heading-3">Tens dúvida? Adoramos conversar com as nossas clientes :)</h3>
                    <div>
                        <p class="heading-6">Horario de atendimento: segunda a sexta, das 9hs às 18hs. <br> Email: atendimento@greensis.pt <br> Whats app: <a href="https://wa.me/351915332628" target="_blank">(351) 915.332.628</a> <br> Portugal </p>
                        <nav class="heading-6">
                            <?php 
                                wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'my_footer_menu' 
                                        ) 
                                    ); 
                            ?>
                        </nav>
                        <p class="heading-7">Copyright <span class="year"></span> © greensis</p>
                    </div>
                    <div class="g-letter-pequeno"></div>

                </div>
            </footer>

    <?php


    }

?>

<div class="overlay d-none"></div>

<script src="<?php echo get_template_directory_uri(); ?>/dist/js/template-min.js"></script>

    <?php 
        if ( is_front_page() ) : ?>  

        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/home-min.js"></script>

    <?php
        endif;

    ?>

</body>
</html>