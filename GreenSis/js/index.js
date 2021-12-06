const resizeBox = () => {    
    jQuery('.home-page .terceira-sessao .text').addClass('foo')

    jQuery('.home-page section').each(function() {
        const imageHeight = jQuery(this).find('.image img').height()
        jQuery(this).find('.text').css('min-height', imageHeight);
    });
    const box3H = jQuery('.home-page .terceira-sessao .text').css('min-height').replace('px', '')
    jQuery('.home-page .g-letter').height(box3H * 2)

}

window.addEventListener('load', function(event) {
   resizeBox();
});

window.addEventListener('resize', function(event) {
    resizeBox();
});