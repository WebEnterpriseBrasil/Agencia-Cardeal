<?php

    function load_scripts(){
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-free-5.15.4-web/css/all.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-free-5.15.4-web/css/fontawesome.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'estilo', get_template_directory_uri() . '/css/estilo.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'responsivo', get_template_directory_uri() . '/css/responsivo.css', array(), '1.0', 'all' );
        /* wp_enqueue_style( 'estilo-min', get_template_directory_uri() . '/dist/css/estilo.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'responsivo-min', get_template_directory_uri() . '/dist/css/responsivo.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'normalize-min', get_template_directory_uri() . '/dist/css/normalize.min.css', array(), '1.0', 'all' ); */
    
	}

    add_action( 'wp_enqueue_scripts', 'load_scripts' );

	
// Função de Configuração do Tema
function greensis_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => __( 'Main Menu', 'greensis' ),
			'my_mobile_menu' => __( 'Mobile Menu', 'greensis' ),
			'my_footer_menu' => __( 'Footer Menu', 'greensis' ),
			'my_cart_menu' => __( 'Cart Menu', 'greensis' )
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


// remover menus
function remove_menus(){
	remove_menu_page( 'edit.php' );                   //Posts  
	remove_menu_page( 'edit-comments.php' );          //Comments
}  
add_action( 'admin_menu', 'remove_menus' );



//Crop
add_image_size( 'featured-works', 315, 375, true );

wp_get_attachment_image_src($thumbnail_id,'featured-works');


// pdp carousel
add_filter ( 'woocommerce_product_thumbnails_columns', 'bbloomer_change_gallery_columns' );
 
function bbloomer_change_gallery_columns() {
     return 1; 
}

// widgets
function greensis_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Campo de busca', 'greensis' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Area destinada para o campo de busca', 'greensis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'greensis_widgets_init' );


/* ******* ICONE DO CARRINHO DE COMPRAS COM CONTADOR **** */
add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but() {
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>
	    <?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?>
        <?php
	        
    return ob_get_clean();
 
}

add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_but_count' );
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count( $fragments ) {
 
    ob_start();
    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
    
    ?>
	<?php
    if ( $cart_count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php            
    }
        ?>
    <?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
?>
