const section = document.querySelectorAll(".home-page section")

const forEach = function (arr, callback) {
	Array.prototype.forEach.call(arr, callback);
};

const resizeBox = () => {    
    jQuery('.terceira-sessao .text').addClass('foo')

    jQuery('section').each(function() {
        const imageHeight = jQuery(this).find('.image img').height()
        jQuery(this).find('.text').css('min-height', imageHeight);
    });
    const box3H = jQuery('.terceira-sessao .text').css('min-height').replace('px', '')
    jQuery('.g-letter').height(box3H * 2)

}

window.addEventListener('load', function(event) {
   resizeBox();
});

window.addEventListener('resize', function(event) {
    resizeBox();
});