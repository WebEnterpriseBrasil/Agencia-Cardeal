"use strict";

var _this = void 0;

var resizeBoxWidth = function resizeBoxWidth() {
  jQuery('.home-page section').each(function () {
    // const imageWidth = jQuery(this).find('.image img').width()
    var imageWidth = jQuery(this).find('.image').width();
    var additional = imageWidth * 18.86 / 100;
    jQuery(this).find('.image .inner').css('width', imageWidth * 1.5);
    jQuery(this).find('.image').css('width', imageWidth);
  });
};

var resizeBoxHeight = function resizeBoxHeight() {
  if (jQuery(window).width() > 570) {
    jQuery('.home-page section').each(function () {
      var imageHeight = jQuery(this).find('.image img').height();
      jQuery(this).find('.text .inner').css('min-height', imageHeight);
    });
    var box3H = jQuery('.home-page .terceira-sessao .text .inner').css('min-height').replace('px', '');
    jQuery('.home-page .g-letter').height(box3H * 2);
  } else {
    jQuery(_this).find('.text .inner').css('min-height', 'auto');
  }
};

window.addEventListener('load', function (event) {
  //resizeBoxWidth();
  resizeBoxHeight();
});
window.addEventListener('resize', function (event) {
  //resizeBoxWidth();
  resizeBoxHeight();
});