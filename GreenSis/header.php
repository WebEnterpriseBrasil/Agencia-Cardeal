<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<!-- O charset padrão -->
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Necessário para layout responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/imagens_paginas_1_a_8/logo.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/normalize.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-free-5.15.4-web/css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-free-5.15.4-web/css/all.min.css" />
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" integrity="sha512-QAV866KcCo2YSgj8D7BW+Zn3Fe5wVKTWwzKtWy8mkW+tePcJL7JYilvdfrBFQcdz4ODD48GpIPnhTp9UDI37uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- O título do blog -->
	<title><?php wp_title(''); ?></title>

</head>

<!-- Início do body -->
<body <?php body_class(); ?>>
<header>
        <div class="container">

            <div class="content-desktop">

                <div class="logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"/></a>
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
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </nav>
    
                        <nav class="icons">                            
                            <a href="#" class="search"></i></a>
                            <a href="#" class="user"></a>
                            <a href="#" class="cart"></a>
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
                        <a class="logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-mobile.png"/></a>
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