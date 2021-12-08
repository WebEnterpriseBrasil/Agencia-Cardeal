<?php

    function load_scripts(){
        wp_enqueue_style( 'estilo', get_template_directory_uri() . '/css/estilo.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'responsivo', get_template_directory_uri() . '/css/responsivo.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'estilo-min', get_template_directory_uri() . '/dist/css/estilo.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'responsivo-min', get_template_directory_uri() . '/dist/css/responsivo.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'normalize-min', get_template_directory_uri() . '/dist/css/normalize.min.css', array(), '1.0', 'all' );
    
	}

    add_action( 'wp_enqueue_scripts', 'load_scripts' );

	
// Função de Configuração do Tema
function greensis_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => __( 'Main Menu', 'greensis' ),
			'my_mobile_menu' => __( 'Mobile Menu', 'greensis' )
		)
	);

    // Adicionando suporte ao tema
	$args = array(
		'height'	=> 230,
		'width'		=> 1280
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo', array( 'height' => 230, 'width' => 470 ) );

}
add_action( 'after_setup_theme', 'greensis_config', 0 );
?>