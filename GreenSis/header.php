<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo content_url(); ?>/assets/favicon.png" type="image/x-icon" /><?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" integrity="sha512-QAV866KcCo2YSgj8D7BW+Zn3Fe5wVKTWwzKtWy8mkW+tePcJL7JYilvdfrBFQcdz4ODD48GpIPnhTp9UDI37uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<!-- Início do body -->
<body <?php body_class(); ?>>
<header>
        <div class="container">

            <div class="content-desktop">

                <div class="logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png"/></a>
                </div>

                <div class="right">
                    <div id="menu">              
                       
                        <ul class="menu-lista" class="hidden-mobile">

                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'my_main_menu' 
                                    ) 
                                ); 
                        ?>
                        </ul>      
                        
                    </div>
                    <div class="social">
                        <nav class="nav-social">
                            <a href="https://www.facebook.com/greensis.naturalbeauty"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/greensis.naturalbeauty/"><i class="fab fa-instagram"></i></a>
                        </nav>
    
                        <nav class="icons">                            
                            <a href="#" class="search"></i></a>
                            <a href="/minha-conta/" class="user"></a>
                            <a href="/meu-carrinho" class="cart"></a>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="content-mobile"> 
                <div class="cols">
                    <div class="menu-action">
                        <i class="fas fa-bars"></i>  
                    </div>
                    <div class="logo">
                        <a class="logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo-mobile.png"/></a>
                    </div>
                    <nav class="menu-action-cart icons">                            
                        <a href="javascript:void(0)" class="cart"></a>
                    </nav>
                </div>
                <div class="boxes_">
                    <div class="box left">
                        <div class="action-bar">
                            <nav class="nav-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"></a><i class="fab fa-instagram"></i></a>
                            </nav>
                            <div class="close"><i class="far fa-times-circle"></i></div>         
                        </div>
                        <div class="search">
                            <div class="search-field">
                                <div class="prepend-icon"><i class="fas fa-search"></i></div>
                                <input class="field" type="text" placeholder="Pesquisar" />
                            </div>
                        </div>
                        <ul>
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'my_mobile_menu' 
                                    ) 
                                ); 
                        ?>
                        </ul>
                    </div>
                    <div class="box right">
                        <div class="action-bar">
                            <div class="close"><i class="far fa-times-circle"></i></div>         
                        </div>
                        <div class="title">
                            <h4>Carrinho</h4>
                        </div>
                        <div class="content">
                            <p>Nenhum produto no carrinho.</p>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </header>