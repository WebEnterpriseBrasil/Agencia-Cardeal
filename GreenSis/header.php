<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/css/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/css/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/css/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/css/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/css/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/css/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/css/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" integrity="sha512-QAV866KcCo2YSgj8D7BW+Zn3Fe5wVKTWwzKtWy8mkW+tePcJL7JYilvdfrBFQcdz4ODD48GpIPnhTp9UDI37uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<!-- Início do body -->
<body <?php body_class(); ?>>
<header>
        <div class="container">

            <div class="content-desktop">

                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png"/></a>
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
                        <div class="gsearchfield">
                            <div class="close"><i class="far fa-times-circle"></i></div>
                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        </div>  
                        
                    </div>
                    <div class="social">
                        <nav class="nav-social">
                            <a href="https://www.facebook.com/greensis.naturalbeauty" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/greensis.naturalbeauty/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </nav>
    
                        <nav class="icons">                            
                            <a href="javascript:void(0)" class="search"></i></a>
                            <a href="/minha-conta/" class="user"></a>
                            <?php $events_page = get_post(6); ?>
                            <a href="<?php echo get_permalink($events_page->ID); ?>" class="cart">
                                <?php echo do_shortcode("[woo_cart_but]"); ?>
                            </a>
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
                        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo-mobile.png"/></a>
                    </div>
                    <nav class="menu-action-cart icons">                            
                        <a href="/meu-carrinho" class="cart">
                            <?php echo do_shortcode("[woo_cart_but]"); ?>
                        </a>
                    </nav>
                </div>
                <div class="boxes_">
                    <div class="box left">
                        <div class="action-bar">
                            <nav class="nav-social">
                                <a href="https://www.facebook.com/greensis.naturalbeauty" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/greensis.naturalbeauty" target="_blank"><i class="fab fa-instagram"></i></a>
                            </nav>
                            <div class="close"><i class="far fa-times-circle"></i></div>         
                        </div>
                        <!-- <div class="search">
                            <div class="search-field">
                                <div class="prepend-icon"><i class="fas fa-search"></i></div>
                                <div class="gsearchfield">
                                    <div class="close"><i class="far fa-times-circle"></i></div>
                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                </div>  
                            </div>
                        </div>-->
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
                </div>     
            </div>
        </div>
    </header>