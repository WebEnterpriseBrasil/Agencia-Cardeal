"use strict";

var _this = void 0;

var resizeBoxHeight = function resizeBoxHeight() {
  if (jQuery(window).width() > 1099) {
    jQuery('.page-template-home-template section').each(function () {
      var imageHeight = jQuery(this).find('.image img').height();
      jQuery(this).find('.text .inner').css('min-height', imageHeight);
    });
    var box3H = jQuery('.page-template-home-template .terceira-sessao .text .inner').css('min-height').replace('px', '');
    jQuery('.page-template-home-template .g-letter').height(box3H * 2);
  } else {
    jQuery(_this).find('.text .inner').css('min-height', 'auto');
  }
};

window.addEventListener('load', function (event) {
  resizeBoxHeight();
});
window.addEventListener('resize', function (event) {
  resizeBoxHeight();
});