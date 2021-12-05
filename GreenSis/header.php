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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-free-5.15.4-web/css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fontawesome-free-5.15.4-web/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estilo.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsivo.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" integrity="sha512-QAV866KcCo2YSgj8D7BW+Zn3Fe5wVKTWwzKtWy8mkW+tePcJL7JYilvdfrBFQcdz4ODD48GpIPnhTp9UDI37uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
	<!-- O título do blog -->
	<title><?php wp_title(''); ?></title>

	<?php wp_head(); ?>
</head>

<!-- Início do body -->
<body class="home-page">
   <header>
        <div class="container">

            <div class="content">
                <div class="logo">
                    <a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/imagens_paginas_1_a_8/Logo_GreenSis.png"/></a>
                </div>
                <div id="menu">              
                       
                    <ul class="menu-lista" class="hidden-mobile">
                        <li><a href="Sis.html">sis</a></li>
                        <li><span>|</span></li>
                        <li><a href="Loja.html">loja</a></li>
                        <li><span>|</span></li>
                        <li><a href="Contacto.html">contacto</a></li>
                    </ul>
                    <div class="social">
                        <ul class="menu-social" class="hidden-mobile">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="instagram"></a></li>
                        </ul>

                        <nav class="icons">                            
                            <a href="#" class="search"></i></a>
                            <a href="#" class="user"></a>
                            <a href="#" class="cart"></a>
                        </nav>

                    </div>
                    
                </div>

            </div>

            <div class="menu-action">
                <span></span>
                <span></span>
                <span></span>    
            </div>
            <div class="menu-mobile">
                <ul>
                    <li><a href="Sis.html">sis</a></li>
                    <li><a href="Loja.html">loja</a></li>
                    <li><a href="Contacto.html">contacto</a></li>
                </ul>
                <nav>
                    <a href=""><img src="imagens_paginas_1_a_8/ico_facebook.png"/></a>
                    <a href=""><img src="imagens_paginas_1_a_8/ico_instagran.png"/></a>
                </nav>
            </div>
        </div>
    </header>