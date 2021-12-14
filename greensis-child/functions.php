<?php 
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' ); 

function enqueue_parent_styles() { 
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/css/estilo.css' ); 
} 

// Add Woo Suppport
function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

function QL_customize_add_to_cart_button_woocommerce(){
  return __('Quero Comprar', 'woocommerce');
  }
add_filter('woocommerce_product_single_add_to_cart_text','QL_customize_add_to_cart_button_woocommerce');
add_filter('woocommerce_product_add_to_cart_text','QL_customize_add_to_cart_button_woocommerce');
  
?>
