const openMenuMobile = () => {
    jQuery(".boxes_ .box.left").animate({
        marginLeft: 0
    })
    jQuery('.overlay').show();
}
const openMenuMobileCart = () => {
    console.log('openMenuMobileCart')
    jQuery(".boxes_ .box.right").animate({
        marginRight: 0
    })
    jQuery('.overlay').show();
}
const closeMenuMobile = () => {
    jQuery(".boxes_ .box.left").animate({
        marginLeft: '-300px'
    })
    jQuery('.overlay').hide();
}
const closeMenuMobileCart = () => {
    jQuery(".boxes_ .box.right").animate({
        marginRight: '-300px'
    })
    jQuery('.overlay').hide();
}


// shop 
jQuery('.woocommerce-shop .woocommerce').each(function() {
    jQuery(this).find('.product').eq(0).after('<li class="line"></li>');
    jQuery(this).find('.product').eq(1).after('<li class="line"></li>');
});

// abrir menu mobile
jQuery('.content-mobile .menu-action i').on('click', function() {
    openMenuMobile()
})

// abrir menu mobile cart
jQuery('header .content-mobile .cols .icons a').on('click', function() {
    openMenuMobileCart()
})

// fechar menu mobile e cart
jQuery('.overlay, .content-mobile .action-bar .close i').on('click', function() {
    console.log('fechar')
    closeMenuMobile();
    closeMenuMobileCart();
})

window.addEventListener('resize', function(event) {
    closeMenuMobile();
    closeMenuMobileCart();
});