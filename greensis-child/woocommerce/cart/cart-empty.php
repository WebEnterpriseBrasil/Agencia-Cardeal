<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    }
    wc_print_notices();
    /**
    * @hooked wc_empty_cart_message - 10
    */
    do_action( 'woocommerce_cart_is_empty' );
    if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
    <p>There used to be a button here. It’s gone now.</p>
    <?php endif; ?>